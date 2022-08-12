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
        return view("admin_dashboard.admin");

    }
    function admin_post(Request $request)
    {
        //  $this->validate($request,[
        //     'email' => 'required',
        //    'password' => 'required|min:8',
        //   ]);
        if (Auth::attempt(["email"=>$request["email"],"password"=>$request["password"], "role"=>"0"],$request["remember_me"]))
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
        return view("admin_dashboard.admin_profile");

    }
    function admin_logout()
    {
            Auth::logout();
            return redirect("/");
    }
}
