<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Basket;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login_page');

Route::get('/registration' , function(){
    return view('registration');
})->name('registr_page');

Route::get('/home' , [UserController::class , 'home'])->name('home');

Route::post('/login-user' , [UserController::class , 'login'])->name('login');

Route::post('/register-user' , [UserController::class , 'register'])->name('register');

Route::get('/{user_id}/category-id/{id}' , [ProductController::class , 'product'])->name('category_id');

Route::get('/{user_id}/basket-page' , [BasketController::class , 'basket_page'])->name('basket_page');

Route::post('/add-to-basket' , [BasketController::class , 'add_to_basket'])->name('add_to_basket');

Route::get('/{summa}/{user_id}/pay-page' , [BasketController::class , 'pay_page'])->name('pay_page');

Route::post('/pay' , [BasketController::class , 'pay'])->name('pay');