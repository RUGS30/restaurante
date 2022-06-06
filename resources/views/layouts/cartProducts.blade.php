@extends('layouts.app')

@section('titulo')

   Carrito

@endsection

@section('contenido')

<h3 class="pt-10 uppercase text-2xl  font-bold text-center" style="color: #c8b82b "> <i class="fa fa-shopping-cart px-2" aria-hidden="true"></i> Carrito</h3>

<!-- component -->
<div class="flex justify-center my-6">
    <div class="flex flex-col w-full p-8 text-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
      <div class="flex-1">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
          <thead>
            <tr class="h-12 uppercase">
              <th class="hidden md:table-cell"></th>
              <th class="text-left px-2" style="color: #c8b82b">Productos</th>
              <th class="lg:text-right text-left pl-5 lg:pl-0">
                <span class="lg:hidden" title="Quantity" style="color: #c8b82b">Ctd.</span>
                <span class="hidden lg:inline"  style="color: #c8b82b" >Cantidad</span>
              </th>
              <th class="hidden text-right md:table-cell" style="color: #c8b82b">Precio Unitario</th>
              <th class="text-right" style="color: #c8b82b">Precio Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cartItems->items as $item )

            <tr>
                <td class="hidden pb-4 md:table-cell">
                  <a href="#">
                    <img src="{{ Storage::disk('local')->url('imagenesProducts/'.$item['data']['image'] )}}" class="w-20 rounded" alt="Thumbnail">
                  </a>
                </td>
                <td>
                    <p class="mb-2 md:ml-4" style="color: #c8b82b">{{ $item['data']['name'] }}</p>
                    <span class="mb-2 md:ml-4">{{ $item['data']['description'] }}</span>
                      <a href="{{ route('EliminarCarrito',['id'=> $item['data']['id']]) }}" type="submit" class="text-gray-700 md:ml-4">
                        <small class="text-red-500">(Eliminar Producto)</small>
                      </a>
                </td>
                <td class="justify-center md:justify-end md:flex mt-6">
                  <div class="w-20 h-10">
                    <div class="relative flex flex-row w-full h-8">
                    <input type="number" value="{{ $item['quantity'] }}" 
                      class="w-full font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" />
                    </div>
                  </div>
                </td>
                <td class="hidden text-right md:table-cell">
                  <span class="text-sm lg:text-base font-medium">
                   $ {{ $item['data']['price'] }}
                  </span>
                </td>
                <td class="text-right">
                  <span class="text-sm lg:text-base font-medium">
                   $ {{ $item['totalSinglePrice']}}
                  </span>
                </td>
              </tr> 

          
          
            @endforeach 
            
          
          
          </tbody>
        </table>
        <hr class="pb-6 mt-6">
        <div class="my-4 mt-6 -mx-2 lg:flex">
          <div class="lg:px-2 lg:w-1/2">
            <div class="p-4  text-black rounded-full" style="background-color: #c8b82b">
              <h1 class="ml-2 font-bold uppercase">Detalles de la Orden</h1>
            </div>
            <div class="p-4">
                <div class="flex justify-between border-b">
                  <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-white">
                    Total a Pagar
                  </div>
                  <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-white">
                   $ {{$cartItems -> totalPrice }}
                </div>
                </div>
                  <div class="flex justify-between pt-4 border-b">
                    <div class="flex lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-white">
                      
                    
                  <div class="flex justify-center pt-2">
                    <a href="{{ route('Datos_Envio') }}">
                        <button class="flex justify-center w-full px-10 py-1 mt-1 font-sm text-black font-bold uppercase  rounded-full shadow item-center hover:bg-gray-300 focus:shadow-outline focus:outline-none" style="background-color: #c8b82b">
                          <span class="ml-2 mt-5px">Pagar</span>
                        </button>
                  </div>
        
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









@endsection



