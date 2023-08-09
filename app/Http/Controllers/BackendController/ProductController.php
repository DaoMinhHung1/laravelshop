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
        return view('Backend.Layout.Product.QuanLySanPham', compact('products'));
    }
    public function aokhoac()
    {
        $categoryId = 2;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLySanPham', compact('products'));
    }
    public function giay()
    {
        $categoryId = 3;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLySanPham', compact('products'));
    }
    public function phukien()
    {
        $categoryId = 4;
        $products = Product::where('category_id', $categoryId)->get();
        return view('Backend.Layout.Product.QuanLySanPham', compact('products'));
    }

    public function adddt()
    {
        $categories = Category::all();
        return view('Backend.Layout.Product.ThemSanPham', compact('categories'));
    }
    public function addProduct(Request $request)
    {
        $request->validate([
            'imgproduct' => 'array', // Sửa thành validation array
            'imgproduct.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Thêm wildcard *
        ]);

        $product = new Product;
        $product->maproduct = $request->input('maproduct');
        $product->nameproduct = $request->input('nameproduct');
        $product->priceproduct = $request->input('priceproduct');
        $product->statusproduct = $request->input('statusproduct');
        $product->desproduct = $request->input('desproduct');
        $product->substance = $request->input('substance');




        $uploadedImages = [];

        if ($request->hasFile('imgproduct')) {
            foreach ($request->file('imgproduct') as $imageFile) {
                if ($imageFile->isValid()) {
                    $ext = $imageFile->extension();
                    $imgext = time() .  uniqid() . '.' . $ext;

                    // Lưu file ảnh vào đường dẫn public/images/products
                    $imagePath = $imageFile->storeAs('public/images/products', $imgext);

                    $uploadedImages[] = $imgext; // Lưu tên ảnh vào mảng
                }
            }
        }
        

        // Chuyển mảng tên ảnh thành chuỗi JSON và lưu vào cột imgproduct
        $product->imgproduct = json_encode($uploadedImages);

        $category_id = $request->input('category');
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
            'imgproduct' => 'array', // Sửa thành validation array
            'imgproduct.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Thêm wildcard *
        ]);

        $product = Product::findOrFail($id);
        $product->maproduct = $request->input('maproduct');
        $product->nameproduct = $request->input('nameproduct');
        $product->priceproduct = $request->input('priceproduct');
        $product->statusproduct = $request->input('statusproduct');
        $product->desproduct = $request->input('desproduct');
        $product->substance = $request->input('substance');


        $uploadedImages = [];

        if ($request->hasFile('imgproduct')) {
            foreach ($request->file('imgproduct') as $imageFile) {
                if ($imageFile->isValid()) {
                    $ext = $imageFile->extension();
                    $imgext = time() .  uniqid() . '.' . $ext;

                    // Lưu file ảnh vào đường dẫn public/images/products
                    $imagePath = $imageFile->storeAs('public/images/products', $imgext);
                    $uploadedImages[] = $imgext; // Lưu tên ảnh vào mảng
                }
            }
        }
        if (!empty($uploadedImages)) {
            // Xóa ảnh cũ nếu có
            if (!empty($product->imgproduct)) {
                $oldImages = json_decode($product->imgproduct);
                foreach ($oldImages as $oldImage) {
                    File::delete(storage_path('app/public/images/products/' . $oldImage));
                }
            }
        
            // Chuyển mảng tên ảnh thành chuỗi JSON và lưu vào cột imgproduct
            $product->imgproduct = json_encode($uploadedImages);
        }

        // Chuyển mảng tên ảnh thành chuỗi JSON và lưu vào cột imgproduct
        $product->imgproduct = json_encode($uploadedImages);

        $category_id = $request->input('category');

        // Gán giá trị danh mục vào cột "category_id"
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
