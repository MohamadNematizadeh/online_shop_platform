<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get_all_for_client()
    {
        $products = Product::all();
        return view("products",["products"=>$products]);
    }
    function get_all_for_admin()
    {
        $products = Product::all();
        return view("admin.products",["products"=>$products]);
    }
    function get_all()
    {
        $products = Product::all();
        return view("product",["products"=>$products]);
    }
    function add_get()
    {
        return view('admin.add_products');

    }
    function add_post(Request $request)
    {
        $new_products = new Product();
        $new_products->name = $request['name'];
        $new_products->description = $request['description'];
        $new_products->price= $request['price'];
        $new_products->save();
        return redirect('/admin/products');
    }
    function edit_get($id)
    {
        $products=Product::find($id);
        return view("admin.edit_products",[
            "products"=>$products
        ]);
    }
    function edit_post(Request $request)
    {
        $products=Product::find($request["id"]);
        $products->name=$request["name"];
        $products->update();
        return redirect("/admin/products");
    }
    function delete($id)
    {
        $products =Product::find($id);
        $products->delete();
        return redirect("/admin/products");

    }



}
