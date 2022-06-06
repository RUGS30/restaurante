@extends('layouts.dashboard')


@section('contenido')

<h3 class="font-bold text-blue-800 text-3xl text-center py-5"> <i class="fa-solid fa-file-invoice fa-fw"></i>              

    Ordenes</h3>


    @if (session('OrderDeletionStatus'))

    <div class="container-fluid bg-red-500 py-2 text-white px-4 text-lg" >{{ session('OrderDeletionStatus') }}</div>
    
    @endif
<!-- component -->
<div class="w-full mx-auto">
    <div class="bg-white shadow-md rounded my-6">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead class="bg-blue-400 ">
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Id Orden </th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Fecha</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Nombre</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Dirección</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Teléfono</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Precio</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Estatus</th>
            <th class="py-4 px-9 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Acciones</th>


          </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        
          <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{$order->order_id }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$order->date  }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$order->name  }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$order->address }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$order->phone }}</td>
            <td class="py-4 px-6 border-b border-grey-light">$ {{$order->price }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$order->status }}</td>
            <td class="py-4 px-6 border-b border-grey-light  ">
              <a href="#" class="text-white font-bold py-1 px-3 rounded text-xs bg-blue-500 hover:bg-blue-dark">Editar Producto</a>
              <a href="{{ route('Eliminar_Orden',['id' => $order->order_id ]) }}"
                onclick="return confirm('Estas seguro de eliminar la orden?') "
                
                
                class="text-white  font-bold py-1 mb-5 px-3 rounded text-xs bg-red-500 hover:bg-blue-dark">Eliminar</a>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>

    {{$orders->links()}}
  </div>

  


@endsection