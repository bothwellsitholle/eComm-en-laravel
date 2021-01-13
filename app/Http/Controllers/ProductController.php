<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
  static function cartItem()
     {
        $userID = Session::get('user')->id;
        return $data = Cart::where('user_id', $userID)->count();

     }
    function cartlist()
    {   $userID = Session::get('user')->id;
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$userID)
        ->select('products.*')
        ->get();

        return view('cartlist', ['products' => $products]);
    }
}
