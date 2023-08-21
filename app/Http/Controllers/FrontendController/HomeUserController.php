<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Bill;
use Carbon\Carbon;
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
        $categoryId = $product->category_id;
        $category = Category::all();
        $producttt = Product::where('category_id', $categoryId)
            ->where('id', '!=', $id) // Loại bỏ sản phẩm hiện tại
            ->take(4) // Số lượng sản phẩm tương tự hiển thị
            ->get();
        return view("Frontend.Layout.ChiTietSanPham", compact('product', 'category', 'producttt'));
    }

    public function giohang(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $imgpd = json_decode($product->imgproduct);
        $quantity = $request->input('quantity', 1);
        $sizepd = $request->input('size');
        $cart = session()->get('cart', []);
        $cart[$id] = [
            'id' => $product->id,
            'name' => $product->nameproduct,
            'price' => $product->priceproduct,
            'img' =>  $imgpd[0],
            'size' =>  $sizepd,
            'quantity' => $quantity,
        ];

        session()->put('cart', $cart); // Lưu thông tin giỏ hàng vào session

        return view("Frontend.Layout.GioHangSanPham", compact('cart', 'product', 'imgpd'));
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
    public function tinhtienbill(Request $request)
    {

        $cart = session()->get('cart', []);
        $totalPrice = 0;
        $nameCartList = [];

        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
            $nameCartList[] = $item['name'];
            $imgCartList[] = $item['img'];
            $quantitypd = $item['quantity'];
            $sizepds = $item['size'];
        }

        $ngayHoaDon = Carbon::now();

        $bill = new Bill;
        $bill->mabill = 'sss';
        $bill->nameuser = $request->input('nameuser');
        $bill->phoneuser = $request->input('phoneuser');
        $bill->addressuser = $request->input('addressuser');
        $bill->tongtien = $totalPrice;
        $bill->ngayhoadon = $ngayHoaDon;
        $bill->quantity = $quantitypd;
        $bill->sizepd = $sizepds;
        $bill->namepd = json_encode($nameCartList, JSON_UNESCAPED_UNICODE);
        $bill->imgpd = json_encode($imgCartList, JSON_UNESCAPED_UNICODE);
        $bill->save();
        session()->forget('cart');
        return redirect()->route('home');
    }

    public function gioithieu()
    {
        return view('Frontend.Layout.GioiThieu');
    }


    public function lienhe()
    {
        return view('Frontend.Layout.LienHe');
    }
    public function guilienhe(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->des = $request->input('des');

        $contact->save();
        return view('Frontend.Layout.LienHe');
    }

    public function thanhtoanthanhcong()
    {
        $bills = Bill::all();
        return view('Frontend.Layout.DatHangThanhCong', compact('bills'));
    }
}
