<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($old_cartitems as $item) {
            if (!Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists()) {
                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('user_id', Auth::id())->get();

        $provinsi = $this->get_province();

        $total_weight= 0;
        foreach ($cartitems as $prod) {
            $total_weight += $prod->products->weight * $prod->prod_qty;
        }

        return view('frontend.checkout', compact('cartitems', 'provinsi', 'total_weight'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('show_city');
        $order->state = $request->input('show_province');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');


        // To Calculate the total price
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems_total as $prod) {
            ($total += $prod->products->selling_price * $prod->prod_qty);
        }

        $order->total_price = $total;

        $order->ekspedisi = $request->input('courier');
        $order->layanan = $request->input('layanan');
        $order->ongkir = str_replace(['+', '-'], '', filter_var($request->input('layanan'), FILTER_SANITIZE_NUMBER_INT));

        $order->tracking_no = 'reds' . rand(1111, 9999);
        $order->no_resi = '-';

        $order->save();


        $user = User::where('id', Auth::id())->first();
        $user->name = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('show_city');
        $user->state = $request->input('show_province');
        $user->country = $request->input('country');
        $user->pincode = $request->input('pincode');

        $user->save();


        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);

            $prod = Product::where('id', $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if (Auth::user()->address1 == NULL) {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone = $request->input('phone');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->city = $request->input('show_city');
            $user->state = $request->input('show_province');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pincode');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        return redirect('/')->with('status', "Order placed Sucessfully");
    }

    public function get_province()
    {
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "key: 6b9478dddbb8633c2f25a44676f2f304"
                ),
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            //ini kita decode data nya terlebih dahulu
            $response = json_decode($response, true);

            //ini untuk mengambil data provinsi yang ada di dalam rajaongkir result
            $data_pengirim = $response['rajaongkir']['results'];
            return $data_pengirim;
        }
    }

    public function get_city($id)
    {
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=$id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "key: 6b9478dddbb8633c2f25a44676f2f304"
                ),
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);
            $data_kota = $response['rajaongkir']['results'];
            return json_encode($data_kota);
        }
    }

    public function get_ongkir($origin, $destination, $weight, $courier)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "origin=39&destination=$destination&weight=$weight&courier=$courier",
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded",
                    "key: 6b9478dddbb8633c2f25a44676f2f304"
                ),
            )
        );
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);
            $data_ongkir = $response['rajaongkir']['results'];
            return json_encode($data_ongkir);
        }
    }
}
