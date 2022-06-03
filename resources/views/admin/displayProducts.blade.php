@extends('layouts.dashboard')
@section('contenido')


<h3 class="font-bold text-blue-800 text-3xl text-center py-5"><i class="fa-solid fa-utensils fa-fw"></i>  
Productos</h3>
    


<!-- component -->
<div class="w-full mx-auto">
    <div class="bg-white shadow-md rounded my-6">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead class="bg-blue-400 ">
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Id</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Nombre</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Descripción</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Tipo</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Precio</th>
            <th class="py-4 px-9 bg-grey-lightest font-bold uppercase text-sm text-gray-100 border-b border-grey-light">Acciones</th>


          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        
          <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{$product['id'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$product['name'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$product['description'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$product['type'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$product['price'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light  ">
              <a href="{{ route('Editar_Img_Producto',['id' => $product['id'] ]) }}" class="text-white font-bold py-1  px-3 rounded text-xs bg-green-500 hover:bg-green-dark">Editar Imagen</a>
              <a href="{{ route('Editar_Producto',['id' => $product['id'] ]) }}" class="text-white font-bold py-1 px-3 rounded text-xs bg-blue-500 hover:bg-blue-dark">Editar Producto</a>
              <a href="{{ route('Eliminar_Producto',['id' => $product['id'] ]) }}" class="text-white  font-bold py-1 mb-5 px-3 rounded text-xs bg-red-500 hover:bg-blue-dark">Eliminar</a>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

