<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    function send_comment(Request $request)

    {
        $new_comment=new Comment();
        $user_id= Session::get("user_id");
        $new_comment->user_id=$user_id;
        $new_comment->product_id=$request["product_id"];
        $new_comment->text=$request["text"];
        $new_comment->save();
        //return redirect("/product/{id}");


    }
}
