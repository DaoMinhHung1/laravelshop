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
        $categories = Category::all();
        $products = Product::all();
        return view("Frontend.Layout.TrangChu", compact('categories'));
    }
    public function spdienthoai()
    {
        $categoryId = 1;
        $dienthoais = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPhamDienThoai", compact('dienthoais'));
    }
    public function splaptop()
    {
        $categoryId = 2;
        $laptops = Product::where('category_id', $categoryId)->get();
        return view("Frontend.Layout.SanPhamLaptop", compact('laptops'));
    }
    public function chitietsp($id)
    {
        $product = Product::findOrFail($id);
        return view("Frontend.Layout.ChiTietSanPham", compact('product'));
    }
}
