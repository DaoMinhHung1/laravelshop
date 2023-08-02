<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $category = Category::all();
        return view("Frontend.Layout.TrangChu", compact('products', 'category'));
    }
    public function spquanao()
    {
        $categoryId = 1;
        $product = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPham", compact('product'));
    }
    public function spaokhoac()
    {
        $categoryId = 2;
        $product = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPham", compact('product'));
    }
    public function spgiay()
    {
        $categoryId = 3;
        $product = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPham", compact('product'));
    }
    public function spphukien()
    {
        $categoryId = 4;
        $product = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPham", compact('product'));
    }
    public function chitietsp($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view("Frontend.Layout.ChiTietSanPham", compact('product', 'category'));
    }

    public function gioithieu()
    {
        return view('Frontend.Layout.GioiThieu');
    }

    public function lienhe()
    {
        return view('Frontend.Layout.LienHe');
    }

    public function map()
    {
        return view('Frontend.Layout.minimap');
    }
}
