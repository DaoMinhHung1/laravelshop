<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function categories()
   {
      $categories = Category::all();
      return view('Backend.Layout.Product.ThemSanPham', compact('categories'));
   }
}
