<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminProductsController;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});


Route::get('/inicio', function () {
    return view('./inicio/index');
});

Route::get('/registro',[RegisterController::class,'index'] ) ->name('register');
Route::post('/registro',[RegisterController::class,'store'] );

Route::get('/login',[LoginController::class,'index'] ) ->name('login');
Route::post('/login',[LoginController::class,'store'] );

Route::post('/logout',[LogoutController::class,'store']) ->name('logout');

Route::post('/productos',[ProductsController::class,'store'] ) ->name('agregar'); 
Route::get('/productos',[ProductsController::class,'index'] ) ->name('products.index'); 


Route::get('/menu',[MenuController::class,'index']) ->name('menu');

Route::get('/menu/AgregarCarrito/{id}',[ProductsController::class,'addProductToCart']) ->name('AddToCartProduct') ;

//Mostrar Carrito

Route::get('/carrito',[ProductsController::class,'showCart']) ->name('carrito');

//Eliminar Producto del Carrito
Route::get('product/eliminarProductoCarrito/{id}',[ProductsController::class,'deleteItemFromCart']) ->name('EliminarCarrito');


Route::get('admin/editarProducto{id}',[AdminProductsController::class,'editProductForm']) ->name('Editar_Producto');


Route::get('admin/editarImagenProducto/{id}',[AdminProductsController::class,'editImageForm']) ->name('Editar_Img_Producto');

//Actualizar Imagen del Producto
Route::post('admin/updateProductImage/{id}',[AdminProductsController::class,'updateProductImage']) ->name('Actualiza_Img_Producto');

//Actualizar Contenido del Producto

Route::post('admin/updateProduct/{id}',[AdminProductsController::class,'updateProduct']) ->name('Actualiza_Producto');


Route::get('admin/createProductForm',[AdminProductsController::class,'createProductForm']) ->name('Agregar_Producto');

//Nuevo Producto
Route::post('admin/sendCreateProductForm/',[AdminProductsController::class,'sendCreateProductForm']) ->name('Enviar_Crear_Producto');

//Eliminar Producto
Route::get('admin/delete/{id}',[AdminProductsController::class,'deleteProduct']) ->name('Eliminar_Producto');

//Crear una Orden

Route::get('product/createOrder/',[ProductsController::class,'createOrder']) ->name('Crear_Orden');

//Formulario Datos Envio
Route::get('product/checkoutProducts/',[ProductsController::class,'checkoutProducts']) ->name('Datos_Envio');


Route::post('product/createNewOrder/',[ProductsController::class,'createNewOrder']) ->name('createNewOrder');

Route::get('product/checkoutProducts/',[ProductsController::class,'checkoutProducts']) ->name('Datos_Envio');



//Ordenes Routes

Route::get('admin/ordersPanel/',[AdminProductsController::class,'ordersPanel']) ->name('Ordenes_Panel');


//Eliminar Orden

Route::get('admin/deleteOrder/{id}',[AdminProductsController::class,'deleteOrder']) ->name('Eliminar_Orden');


Route::get('admin/deliverPanel/',[AdminProductsController::class,'deliverPanel']) ->name('Pedidos_Panel');


Route::get('admin/ordersItems/',[AdminProductsController::class,'ordersItems']) ->name('Pedidos_Panel');












Route::get('admin/productos',[AdminProductsController::class,'index']) ->name('AdminProductos');


Route::get('/{user:username}', [PostController::class,'index']) ->name('posts.index');



