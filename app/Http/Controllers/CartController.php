<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
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

    function order()
    {
        $Comments = Comment::all();
        $Products  = Product::all();
        $Users  = User::all();

        return view("product" , ["Products" => $Products , "Comments"=>$Comments, "Users"=>$Users ]);
    }


    function index()
    {
        return view("index");
    }

}
