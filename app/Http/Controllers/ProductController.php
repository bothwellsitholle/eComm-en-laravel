<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{

// DISPLAY TRENDING PRODUCTS / HOME PAGE
 function index()
 {
    $data = Product::all();
     return  view('product',['products'=>$data]);
 }


 // DISPLAY SELECTED PRODUCT FUNCTION / PRODUCT DETAILS
 function detail($id)
 {
     $data = Product::find($id);
     return view('detail',
     ['products'=>$data]);
 }

 //SEARCH PRODUCT FUNCTION / SEARCH RESULTS
 function search(Request $req)
 {
     $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();

    return view('search',['products'=>$data]);
 }

 // ADD TO CART FUNCTION / ADDING DATA INTO CART TABLE
 function addToCart(Request $req)
 {
     if($req->session()->has('user'))
     {
         $cart = new Cart();
         $cart->user_id = $req->session()->get('user')->id;
         $cart->product_id = $req->product_id;
         $cart->save();

         return redirect('/');

     } else 
     {
         return redirect('/login');
     }

    
 }
}
