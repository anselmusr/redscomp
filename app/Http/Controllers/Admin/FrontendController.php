<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Order;

class FrontendController extends Controller
{
    public function index()
    {
        $count_order = DB::table('orders')->count();
        $count_product = DB::table('products')->count();
        $count_category = DB::table('categories')->count();
        $count_user = DB::table('users')->count();

        $fprevmonth = date("Y-n-j", strtotime("first day of previous month"));
        $lprevmonth = date("Y-n-j", strtotime("last day of previous month"));

        $fthismonth = date("Y-n-j", strtotime("first day of this month"));
        $lthismonth = date("Y-n-j", strtotime("last day of this month"));

        $user_prev = User::whereBetween('created_at', [$fprevmonth, $lprevmonth])->get()->count();
        $user_now = User::whereBetween('created_at', [$fthismonth, $lthismonth])->get()->count();

        if ($user_prev > 0 || $user_now > 0) {
            $diff_user = $user_now - $user_prev;
            $inc_user = $diff_user / $user_prev;
            $percent_user = $inc_user * 100;
        } else {
            $percent_user = 0;
        }


        $order_prev = Order::whereBetween('created_at', [$fprevmonth, $lprevmonth])->get()->count();
        $order_now = Order::whereBetween('created_at', [$fthismonth, $lthismonth])->get()->count();


        if ($order_prev > 0 || $order_now > 0) {
            $diff_order = $order_now - $order_prev;

            if ($order_prev == 0) {
                $order_prev = 1;
            }

            $inc_order = $diff_order / $order_prev;
            $percent_order = $inc_order * 100;
        } else {
            $percent_order = 0;
        }

        $total_order = Order::select(DB::raw("CAST(SUM(id) as int) as orderid"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('orderid');

        $bulan = Order::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        return view('admin.index', compact('count_order', 'order_now', 'count_product', 'count_category', 'count_user', 'percent_user', 'percent_order', 'total_order', 'bulan'));
    }
}
