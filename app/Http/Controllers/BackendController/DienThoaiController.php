<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DienThoaiController extends Controller
{

    public function dienthoai()
    {
        $categoryId = 1;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.DienThoai.QuanLyDienThoai', compact('products'));
    }
    public function adddt()
    {
        return view('Backend.Layout.DienThoai.ThemDienThoai');
    }
    public function addDienThoai(Request $request)
    {
        $request->validate([
            'imgproduct' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);

        $dienthoai = new Product;
        $dienthoai->maproduct = $request->input('maproduct');
        $dienthoai->nameproduct = $request->input('nameproduct');
        $dienthoai->priceproduct = $request->input('priceproduct');
        $dienthoai->imgproduct = 'default.jpg';
        $dienthoai->desproduct = $request->input('desproduct');

        if ($request->hasFile('imgproduct') && $request->file('imgproduct')->isValid()) {
            $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $imageFile = $request->file('imgproduct');

            if (in_array($imageFile->getMimeType(), $validMimeTypes)) {
                $ext = $request->imgproduct->extension();
                $imgext = time() . '.' . $ext;

                // Lưu file ảnh vào đường dẫn public/images
                $imagePath = $imageFile->storeAs('public/images', $imgext);
                $dienthoai->imgproduct = $imgext; // Lưu tên ảnh vào cơ sở dữ liệu
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
        $dienthoai->category_id = $category_id;

        $dienthoai->save();
        return redirect()->route('dienthoai.show');
    }
    public function editdienthoai($id)
    {
        $dienthoai = Product::findOrFail($id);
        return view('Backend.Layout.DienThoai.ChinhSuaDienThoai', compact('dienthoai'));
    }
    public function updatedienthoai(Request $request, $id)
    {
        $request->validate([
            'imgproduct' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra loại và kích thước ảnh
        ]);

        $dienthoai = Product::findOrFail($id);
        $dienthoai->maproduct = $request->input('maproduct');
        $dienthoai->nameproduct = $request->input('nameproduct');
        $dienthoai->priceproduct = $request->input('priceproduct');
        $dienthoai->desproduct = $request->input('desproduct');

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
                if ($dienthoai->imgproduct !== 'default.jpg') {
                    File::delete(storage_path('app/public/images/' . $dienthoai->imgproduct));
                }

                $dienthoai->imgproduct = $imgext; // Lưu tên ảnh mới vào cơ sở dữ liệu
            } else {
                // Xử lý trường hợp định dạng file không hợp lệ
                // Ví dụ: thông báo lỗi, giữ nguyên ảnh cũ, v.v.
            }
        }

        $dienthoai->save();
        return redirect()->route('dienthoai.show');
    }
    public function deletedienthoai($id)
    {
        $dienthoai = Product::findOrFail($id);
        $dienthoai->delete();
        return redirect()->route('dienthoai.show')->with('success', 'Xóa sản phẩm thành công!');
    }
}