<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lib\Cart;
use Illuminate\Support\Facades\Session;


class ProductsController extends Controller
{

    public function index()
    {
       $products = DB::table('products')->get();

        $products= Product::all();

        return view('layouts.dashboard',compact('products'));
       

    }
    public function store(Request $request){
        // return $request->all();
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'type'=> $request->type,
            'price'=> $request->price

        ]);

        
    }
    

    public function addProductToCart(Request $request,$id)
    {
       // $request->session()->forget("cart");
       // $request->session()->flush();



        $prevCart = $request -> session() -> get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);

       // dump($cart);

       return redirect()->route("menu");
    }


    public function showCart(){

        $cart = Session::get('cart');

        if($cart){
           return view('layouts.cartProducts',['cartItems'=>$cart]);

        }else{
           return redirect()->route("menu");

        }

    }

    public function deleteItemFromCart(Request $request,$id){

        $cart=$request->session()->get('cart');

        if(array_key_exists($id,$cart->items)){

            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart -> updatePriceAndQuantity();

        $request->session()->put('cart',$updatedCart);

        return redirect()->route("carrito");


    }


    //
}
