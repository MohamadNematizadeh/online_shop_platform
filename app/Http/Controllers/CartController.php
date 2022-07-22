<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;


class CartController extends Controller
{
    function add()
    {

    }

    function edit()
    {

    }

    function delete(){

    }

    function codeOff(){

    }

    function orders(){
        $Product = Product::all();
        return view("products", ["Product" => $Product ]);
    }
    function order()
    {
        $Products = Product::all();
        return view("product" , ["Product" => $Products ]);
    }

}
