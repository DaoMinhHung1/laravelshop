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
    public function sanpham($category)
    {
        $categoryInfo = Category::where('name', $category)->first();
        $categories = Category::all();

        if($categoryInfo)
        {
            $categoryId = $categoryInfo->id;
            $product = Product::where('category_id', $categoryId)->get();
        } else 
        {
            $product = [];
        }
        $title = $categoryInfo->name;

          // Sử dụng withCount để tính số lượng sản phẩm của mỗi loại
          $categoriesWithCount = Category::withCount('products')->get();
        
          // Tạo mảng lưu trữ số lượng sản phẩm của từng loại
          $productCountByCategory = $categoriesWithCount->pluck('products_count', 'id')->toArray();


        return view("Frontend.Layout.SanPham", compact('product', 'title', 'categories', 'productCountByCategory', 'categoriesWithCount'));
    }
    // public function spaokhoac()
    // {
    //     $categoryId = 2;
    //     $product = Product::where('category_id', $categoryId)->get();
    //     return view("Frontend.Layout.SanPham", compact('product'));
    // }
    // public function spgiay()
    // {
    //     $categoryId = 3;
    //     $product = Product::where('category_id', $categoryId)->get();
    //     $totalQuantity = $product->count();
    //     return view("Frontend.Layout.SanPham", compact('product'));
    // }
    // public function spphukien()
    // {
    //     $categoryId = 4;
    //     $product = Product::where('category_id', $categoryId)->get();
    //     $totalQuantity = $product->count();
    //     return view("Frontend.Layout.SanPham", compact('product'));
    // }
    // public function index()
    // {
    //     $categoryId = 1;
    //     // Lấy danh sách sản phẩm quần áo từ database
    //     $quanaoProducts = Product::where('category_id', $categoryId)->get();
    //     $quanaoTotalQuantity = $quanaoProducts->count();

    //     $categoryId = 2;
    //     // Lấy danh sách sản phẩm áo khoác từ database
    //     $aokhoacProducts = Product::where('category_id', $categoryId)->get();
    //     $aokhoacTotalQuantity = $aokhoacProducts->count();

    //     $categoryId= 3;
    //     // Lấy danh sách sản phẩm giày từ database
    //     $giayProducts = Product::where('category_id', $categoryId)->get();
    //     $giayTotalQuantity = $giayProducts->count();

    //     $categoryId = 4;
    //     // Lấy danh sách sản phẩm phụ kiện từ database
    //     $phukienProducts = Product::where('category_id', $categoryId)->get();
    //     $phukienTotalQuantity = $phukienProducts->count();

    //     // Trả về view và truyền các biến dữ liệu vào view
    //     return view('Frontend.Layout.SanPham', compact('quanaoTotalQuantity', 'aokhoacTotalQuantity', 'giayTotalQuantity', 'phukienTotalQuantity'));
    // }
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
