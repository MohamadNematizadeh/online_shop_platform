<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view("admin.index");
    }
    function admin_get()
    {
        return view("client.admin");

    }
    function admin_post(Request $request)
    {
        //  $this->validate($request,[
        //     'email' => 'required',
        //    'password' => 'required|min:8',
        //   ]);
        if (Auth::attempt(["user_name"=>$request["Mohammad"],"password"=>$request["12345"]]))
        {
            return redirect("/profile_amin")->with([
                "message"=>" شما با موفقیت وارد حساب کاربری خود شدین"
            ]);
        }
        else
        {
            return redirect("/profile_amin")->with([
                "massage"=>"ایمیل یا گذرواژه به درستی وارد نشده"
            ]);

        }

    }
    function admin_profile()
    {
        return view("client.admin_profile");

    }
    function admin_logout()
    {
            Auth::logout();
            return redirect("/");
    }
}
