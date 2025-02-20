<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\ProductList;

class ProductController extends Controller
{
    //
    function index () {
        $categories = Category::with('products.user')->get(); // ดึงข้อมูล Categories พร้อม Product และ User
        return view('product', compact('categories'));
    }

    function add_product (Request $req) {
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        foreach ($req->product_name as $value) {
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }

        return redirect('/product');
    }
}
