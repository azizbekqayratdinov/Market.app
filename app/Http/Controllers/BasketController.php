<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Category;
use App\Models\History;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket_page($user_id){
        $baskets = Basket::where('status' , 0)->get();
        return view('basket' , ['baskets'=>$baskets , 'i'=>1 , 's'=>0 , 'user_id'=>$user_id]);
    }
    public function add_to_basket(Request $request){
        $ctgs = Category::all();
        $prdcs = Product::all();
        Basket::create(
            [
                'user_id'=>$request->user_id,
                'product_id'=>$request->product_id,
                'product_name'=>$request->product_name,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
                'summa'=>$request->price * $request->quantity,
                'status'=>0
            ]
        );
        return view('home', ['user_id' => $request->user_id , 'ctgs' => $ctgs, 'prdcs' => $prdcs , 's'=>0]);
    }
    public function pay_page($s , $user_id){
        return view('pay' , ['summa'=>$s , 'user_id'=>$user_id]);
    }
    public function pay(Request $request){
        $basket = Basket::all();
        foreach($basket as $v){
            $v->status = 1;
            $v->save();
        }
        History::create([
            'user_id'=>$request->user_id,
            'card_number'=>$request->card_number,
            'card_date'=>$request->card_date,
            'summa'=>$request->summa
        ]);
        return redirect()->route('basket_page' , ['user_id'=>$request->user_id]);
    }
}
