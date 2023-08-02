<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class LapTopController extends Controller
{
    public function laptop()
    {
        $categoryId = 2;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Laptop.QuanLyLapTop', compact('laptops'));
    }
}
