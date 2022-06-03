<?php

namespace App\Http\Controllers;

use App\Lib\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function createOrder(){

        $cart = Session::get('cart');

        if($cart){
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("name"=>"recibido","address"=>"xd","zip"=>"57160","phone"=>"55430302","status" => "on_hold", "date" => $date,"price"=>$cart->totalPrice);
            $created_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();


            foreach ($cart->items as $cart_item){

                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['name'];
                $item_price = $cart_item['data']['price'];

                $newItemsInCurrentOrder = array("item_id"=>$item_id,"order_id"=>$order_id,"item_name"=>$item_name,"item_price"=>$item_price);

                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);

            }

            Session::forget("cart");
            Session::flush();
            return redirect()->route("menu")->withsuccess("Gracias Por Elegirnos");

        }else{

            return redirect()->route("menu");
        }


    }

    public function checkoutProducts(){

        return view('layouts.CheckOutProducts');
    }

    public function createNewOrder(Request $request){
        $cart = Session::get('cart');

        $name = $request->input('name');
        $address = $request->input('address');
        $zip = $request->input('zip');
        $phone = $request->input('phone');



        if($cart){
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("status" => "on_hold", "date" => $date,"price"=>$cart->totalPrice);
            $created_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();


            foreach ($cart->items as $cart_item){

                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['name'];
                $item_price = $cart_item['data']['price'];

                $newItemsInCurrentOrder = array("item_id"=>$item_id,"order_id"=>$order_id,"item_name"=>$item_name,"item_price"=>$item_price);

                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);

            }

            Session::forget("cart");
            Session::flush();
            return redirect()->route("menu")->withsuccess("Gracias Por Elegirnos");

        }else{

            return redirect()->route("menu");
        }






    }


    //
}
