<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function get_products()
    {
        $products = Product::all();
        return response()->json($products,200,['Content-type'=>'application/json; charset=utf-8'],JSON_UNESCAPED_UNICODE);

    }

    function get_category()
    {
        $category = Category::all();
        return response()->json($category,200,['Content-type'=>'application/json; charset=utf-8'],JSON_UNESCAPED_UNICODE);

    }
    function city()
    {
        $city = City::all();
        return response()->json($city,200,['Content-type'=>'application/json; charset=utf-8'],JSON_UNESCAPED_UNICODE);

    }

}
