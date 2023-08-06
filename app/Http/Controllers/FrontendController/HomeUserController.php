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

        if ($categoryInfo) {
            $categoryId = $categoryInfo->id;
            $product = Product::where('category_id', $categoryId)->get();
        } else {
            $product = [];
        }
        $title = $categoryInfo->name;

        // Sử dụng withCount để tính số lượng sản phẩm của mỗi loại
        $categoriesWithCount = Category::withCount('products')->get();

        // Tạo mảng lưu trữ số lượng sản phẩm của từng loại
        $productCountByCategory = $categoriesWithCount->pluck('products_count', 'id')->toArray();


        return view("Frontend.Layout.SanPham", compact('product', 'title', 'categories', 'productCountByCategory', 'categoriesWithCount'));
    }
    public function chitietsp($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view("Frontend.Layout.ChiTietSanPham", compact('product', 'category'));
    }

    public function giohang(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->nameproduct,
                'price' => $product->priceproduct,
                'img' =>  $product->imgproduct,
                'quantity' => 1,
            ];
            
        session()->put('cart', $cart); // Lưu thông tin giỏ hàng vào session

        return view("Frontend.Layout.GioHangSanPham", compact('cart', 'product'));
    }

    public function xemgiohang()
    {
        $cart = session()->get('cart', []);
        return view("Frontend.Layout.GioHangSanPham", compact('cart'));
    }

    public function xoasanpham($id)
    {
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart); // Cập nhật lại thông tin giỏ hàng sau khi xóa sản phẩm
        }
    
        return redirect()->route('home.xemgiohang')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function thanhtoan()
    {
        $cart = session()->get('cart', []);
        return view('Frontend.Layout.ThanhToan', compact('cart'));
    }

    public function gioithieu()
    {
        return view('Frontend.Layout.GioiThieu');
    }

    public function lienhe()
    {
        return view('Frontend.Layout.LienHe');
    }
}
