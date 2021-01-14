<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{ public $products; 

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
    {   if(Session::has('user')){
        $userID = Session::get('user')->id;
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id',$userID)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist', ['products' => $products]);
    } else {
        return view('login');
    }
    }
    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        if(Session::has('user')){
            $userID = Session::get('user')->id;
            $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id',$userID)
            ->sum('products.price');

            if($total == null){
                return redirect('/cartlist');
            }
    
            return view('ordernow', ['total' => $total]);
        } else {
            return view('login');
        }
    }
    function placeOrder(Request $req)
    {   $userID = Session::get('user')->id;
        $allCart = Cart::where('user_id', $userID)->get();

        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = 'pending';
            $order->payment_method = $req->payment_method;
            $order->payment_status = 'pending';
            $order->address = $req->address;
        
        }
        if($order->save()){
            $allCart = Cart::where('user_id', $userID)->delete();
            return redirect('/');
        } else {
            return "Something went wrong";
        }
        
    }
    function myOrders()
    {
        if(Session::has('user')){
            $userID = Session::get('user')->id;
            $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id',$userID)
            ->get();

            return view('myorders', ['products' => $orders]);
        } else {
            return view('login');
        }
    }
}
