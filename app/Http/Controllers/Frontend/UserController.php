<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->paginate(5);
        return view('frontend.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();

        return view('frontend.orders.view', compact('orders'));
    }

    public function updateimg(Request $request, $id)
    {

        $orders = Order::find($id);

        if($request->hasFile('b_pembayaran'))
        {
            $path = 'assets/uploads/pembayaran/'.$orders->b_pembayaran;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('b_pembayaran');
            $ext = $file -> getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assets/uploads/pembayaran/',$filename);
            $orders->b_pembayaran = $filename;
        }
        $orders->update();
        return redirect('view-order/'.$id)->with('status', "Image Uploaded");
    }
}
