<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $login = User::all();
        foreach ($login as $v) {
            if ($v->email == $request->email and $v->password == $request->password) {
                $ctgs = Category::all();
                $prdcs = Product::all();
                return view('home', ['user_id' => $v->id , 'ctgs' => $ctgs, 'prdcs' => $prdcs]);
            } else {
                return view('welcome');
            }
        }
    }
    // public function home()
    // {
    //     $ctgs = Category::all();
    //     $prdcs = Product::all();
    //     return view('home', ['ctgs' => $ctgs, 'prdcs' => $prdcs]);
    // }
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/');
    }
}
