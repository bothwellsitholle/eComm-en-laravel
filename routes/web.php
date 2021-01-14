<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
});
Route::get('/header', function () {
    return view('header');
});
// Login Route
Route::post('/login', [UserController::class, 'login']);

Route::get('/', [ProductController::class, 'index']);

Route::get('detail/{id}', [ProductController::class, 'detail']);

//Search Page
Route::get('/search', [ProductController::class, 'search']);

//Add to Cart Page
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);

// //Log Out / The Code you wrote
// Route::get('/logout', function(){
// if(Session::has('user')){
//     Session::pull('user');
//     return redirect('/login');
//     } else {
//     return view('/');
//     }
// });

//ALTERNATIVE LOGOUT
Route::get('/logout', function(){
        Session::forget('user');
        return redirect('/login');
    });

//Cart List Page
Route::get('/cartlist', [ProductController::class, 'cartlist']);

//Remove Cart Route
Route::get('remove-cart-item/{id}', [ProductController::class, 'removeItem']);

//Order Now Route
Route::get('ordernow', [ProductController::class, 'orderNow']);



