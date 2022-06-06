@extends('layouts.dashboard')


@section('contenido')

<h3 class="font-bold text-blue-800 text-3xl text-center py-5"> <i class="fa-solid fa-truck-fast"></i>            

    Pedidos</h3>


    @if (session('OrderDeletionStatus'))

    <div class="container-fluid bg-red-500 py-2 text-white px-4 text-lg" >{{ session('OrderDeletionStatus') }}</div>
    
    @endif
<!-- component -->
<div class="w-full mx-auto">
    <div class="bg-white shadow-md rounded my-6">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead class="bg-blue-400 ">
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">ID Pedido</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">ID Producto</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Id Orden </th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Productos</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Precio</th>
            <th class="py-4 px-6 bg-grey-lightest text-center font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Acciones</th>

          </tr>
        </thead>
        <tbody>
        @foreach($delivers as $deliver)
        
          <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{$deliver->id }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$deliver->item_id  }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$deliver->order_id  }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$deliver->item_name }}</td>
            <td class="py-4 px-6 border-b border-grey-light">$ {{$deliver->item_price }}</td>
            <td class="py-4 px-6 border-b border-grey-light text-center  ">
              <a href="#" class="text-white font-bold py-1 px-3 rounded text-xs bg-blue-500 hover:bg-blue-dark">Editar Producto</a>
              <a href="#"
                onclick="return confirm('Estas seguro de eliminar la orden?') " 
                class="text-white  font-bold py-1 mb-5 px-3 rounded text-xs bg-red-500 hover:bg-blue-dark">Cancelar</a>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>

    {{$delivers->links()}}
  </div>

  


@endsection