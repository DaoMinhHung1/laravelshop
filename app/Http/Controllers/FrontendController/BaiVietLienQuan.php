<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BaiVietLienQuan extends Controller
{
    public function baivietlienquan()
    {
        $product = Product::all();
        return view('Frontend.Layout.GioiThieu', compact('product'));
    }
}
