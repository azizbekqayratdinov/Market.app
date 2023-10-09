<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($user_id , $id){
        $ctgs = Category::all();
        $prdcs = Product::where('category_id' , $id)->get();
        return view('product' , ['user_id'=>$user_id , 'ctgs'=>$ctgs , 'prdcs'=>$prdcs]);
    }
}
