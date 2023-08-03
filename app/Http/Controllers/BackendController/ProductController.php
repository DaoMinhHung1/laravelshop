<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function quanao()
    {
        $categoryId = 1;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLyQuanAo', compact('products'));
    }
    public function aokhoac()
    {
        $categoryId = 2;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLyAoKhoac', compact('products'));
    }
    public function giay()
    {
        $categoryId = 3;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLyGiay', compact('products'));
    }
    public function phukien()
    {
        $categoryId = 4;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLyPhuKien', compact('products'));
    }

    public function adddt()
    {
        $categories = Category::all();
        return view('Backend.Layout.Product.ThemSanPham', compact('categories'));
    }
    public function addProduct(Request $request)
    {
        $request->validate([
            'imgproduct' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);

        $product = new Product;
        $product->maproduct = $request->input('maproduct');
        $product->nameproduct = $request->input('nameproduct');
        $product->priceproduct = $request->input('priceproduct');
        $product->statusproduct = $request->input('statusproduct');
        $product->imgproduct = 'default.jpg';
        $product->desproduct = $request->input('desproduct');

        if ($request->hasFile('imgproduct') && $request->file('imgproduct')->isValid()) {
            $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $imageFile = $request->file('imgproduct');

            if (in_array($imageFile->getMimeType(), $validMimeTypes)) {
                $ext = $request->imgproduct->extension();
                $imgext = time() . '.' . $ext;

                // Lưu file ảnh vào đường dẫn public/images
                $imagePath = $imageFile->storeAs('public/images', $imgext);
                $product->imgproduct = $imgext; // Lưu tên ảnh vào cơ sở dữ liệu
            } else {
                // Xử lý trường hợp định dạng file không hợp lệ
                // Ví dụ: thông báo lỗi, không lưu ảnh, gán ảnh mặc định, v.v.
            }
        } else {
            // Xử lý trường hợp không có hoặc không hợp lệ file ảnh
            // Ví dụ: gán ảnh mặc định
        }

        $category_id = $request->input('category');

        // Gán giá trị danh mục vào cột "category_id"
        $product->category_id = $category_id;

        $product->save();
        return redirect()->route('quanao.show');
    }
    public function editProduct($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('Backend.Layout.Product.ChinhSuaSanPham', compact('product', 'categories', 'id'));
    }
    public function updateProduct(Request $request, $id)
    {

        $request->validate([
            'imgproduct' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);

        $product = Product::findOrFail($id);
        $product->maproduct = $request->input('maproduct');
        $product->nameproduct = $request->input('nameproduct');
        $product->priceproduct = $request->input('priceproduct');
        $product->statusproduct = $request->input('statusproduct');
        $product->desproduct = $request->input('desproduct');

        if ($request->hasFile('imgproduct') && $request->file('imgproduct')->isValid()) {
            // Có ảnh mới được gửi lên
            $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $imageFile = $request->file('imgproduct');

            if (in_array($imageFile->getMimeType(), $validMimeTypes)) {
                $ext = $request->imgproduct->extension();
                $imgext = time() . '.' . $ext;

                // Lưu file ảnh vào đường dẫn public/images
                $imagePath = $imageFile->storeAs('public/images', $imgext);

                // Xóa ảnh cũ nếu có (trừ ảnh mặc định nếu có)
                if ($product->imgproduct !== 'default.jpg') {
                    File::delete(storage_path('app/public/images/' . $product->imgproduct));
                }

                $product->imgproduct = $imgext; // Lưu tên ảnh mới vào cơ sở dữ liệu
            } else {
                // Xử lý trường hợp định dạng file không hợp lệ
                // Ví dụ: thông báo lỗi, giữ nguyên ảnh cũ, v.v.
            }
        }

        $category_id = $request->input('category');
        $product->category_id = $category_id;


        $product->save();
        return redirect()->route('quanao.show');
    }
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('quanao.show')->with('success', 'Xóa sản phẩm thành công!');
    }
}
