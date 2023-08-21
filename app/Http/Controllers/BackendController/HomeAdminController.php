<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function trangchu()
    {
        return view('Backend.Layout.TrangChu');
    }
    public function thongke()
    {
        $products = Product::all();

        
        $sumproduct = $products->count();
        return view('Backend.Layout.ThongKe', compact('sumproduct'));
    }

    public function hoadon()
    {
        $bills = Bill::all();
        return view('Backend.Layout.HoaDon', compact('bills'));
    }
}
