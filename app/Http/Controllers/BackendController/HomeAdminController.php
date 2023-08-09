<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
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
}
