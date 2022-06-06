<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AdminProductsController extends Controller
{

    public function __construct()
    {
        $this -> middleware('auth');

    }

    public function index(){

        $products= Product::paginate(10);
        return view('admin.displayProducts',['products'=>$products] );

    }

    public function createProductForm(){
        return view("admin.createProductForm"); 
    }


    public function editProductForm($id){
        $product = Product::find($id);

        return view('admin.editProductForm',['product'=>$product]);



    }
    public function editImageForm($id){
        $product = Product::find($id);

        return view('admin.editProductImageForm',['product'=>$product]);


    }

    public function updateProductImage(Request $request,$id){
        Validator::make($request->all(),['image'=>"required | image | mimes:jpg,jpeg,png,webp | max:5000"])->validate();

        if($request->hasFile("image")){
            $product = Product::find($id);
            $exists = Storage::disk('local')->exists("public/imagenesProducts/".$product->image);

            if($exists){
                Storage::delete('public/imagenesProducts/'.$product->image);
            }

            $ext = $request->file('image')->getClientOriginalExtension();

            $request ->image->storeAs("public/imagenesProducts/",$product->image);

            return redirect()->route("AdminProductos");


        }else{

            $error = "No haz seleccionado la imagen";
            return $error;
        }


    }

    public function updateProduct(Request $request,$id){

        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');

        $updateArray = array("name"=>$name,"description"=>$description,"type"=>$type,"price"=>$price);

        DB::table('products')->where('id',$id)->update($updateArray);

        return redirect()->route("AdminProductos");

    }

    public function sendCreateProductForm(Request $request){

        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');

        Validator::make($request->all(),['image'=>"required | image | mimes:jpg,jpeg,png,webp | max:5000"])->validate();
        $ext = $request->file('image')->getClientOriginalExtension();
        $stringImageReFormat = str_replace("","",$request->input('name'));

        $imageName = $stringImageReFormat.".".$ext; 

        $imageEncoded = File::get($request->image);

        Storage::disk('local')->put('public/imagenesProducts/'.$imageName,$imageEncoded);

        $newProductArray  = array("name"=>$name,"description"=>$description,"image"=>$imageName, "type"=>$type,"price"=>$price);


        $created= DB::table('products')->insert($newProductArray);


        if($created){
            return redirect()->route("AdminProductos");

        }else{

            return "El Producto no ha sido creado"; 

        }



    }

    public function deleteProduct($id){

        $product = Product::find($id);

        $exists = Storage::disk('local')->exists("public/imagenesProducts/".$product->image);

        if($exists){
            Storage::delete('public/imagenesProducts/'.$product->image);
        }

        Product::destroy($id); 

        return redirect()->route("AdminProductos");


    }

    public function ordersPanel(){

        $orders = DB::table('orders')->paginate(10);


        return view('admin.ordersPanel',['orders' => $orders]);


    }


    public function deleteOrder(Request $request,$id){

        $deleted = DB::table('orders')->where("order_id",$id)->delete();

        if($deleted){
            return redirect()->back()->with('OrderDeletionStatus','Orden '.$id. ' ha sido eliminada');
        }else{

            return redirect()->back()->with('OrderDeletionStatus','Orden '.$id. ' no se ha eliminado');

        }

    }


    public function ordersItems(){

        $delivers = DB::table('order_items')->paginate(10);


        return view('admin.orderItems',['delivers' => $delivers]);


    }
}
