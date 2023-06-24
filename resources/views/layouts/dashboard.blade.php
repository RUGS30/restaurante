<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serrecom</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/fe383ea4e7.js" crossorigin="anonymous"></script>

    </head>

<body  class="bg-zinc-800 min-h-screen leading-none">

    <!-- component -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
  .is-close {
    text-align: center;
  }
  .is-close .hidden-item {
    display: none;
  }
</style>
<div >
  <div class="flex bg-gray-300" x-data="{isClose: true, toggle: true}">
    <div id="menu" class="bg-gray-800 flex flex-col justify-between" :class="{'is-close': isClose, 'w-16': isClose, 'w-48': !isClose}" @mouseover="isClose=false" @mouseleave="isClose=true">
      <div>
        <div class="h-16 bg-blue-500 text-white flex items-center justify-center">
          <a class=" px-5 text-white text-lg h-8 flex items-center justify-center" href="javascript:;">
            <span class="bg-blue-700 rounded-full h-8 w-8 flex items-center justify-center">
              <i class="fas fa-spa fa-fw"></i>
            </span>
            <span class="hidden-item px-2"> Admin</span>
          </a>
        </div>
        <ul class="text-white">
         
          <li>
            <a href="{{ route('AdminProductos') }}" class="block p-3 mb-2 mt-2 border-gray-900 hover:text-orange-400">
              <i class="fa-solid fa-utensils fa-fw"></i>  
              <span class="hidden-item">Productos</span>          
            </a>  
          </li>
          <li>
            <a href="{{ route('Agregar_Producto') }}" class="block p-3 mb-2 border-gray-900 hover:text-orange-400">
              <i class="fa-solid fa-plus fa-fw"></i>              
              <span class="hidden-item">Agregar Producto</span>          
            </a>  
          </li>
          <li>
            <a href="{{ route('Ordenes_Panel') }}" class=" block p-3 border-gray-900 hover:text-orange-400">
              <i class="fa-solid fa-file-invoice fa-fw"></i>              
              <span class="hidden-item px-1">Ordenes</span>          
            </a>  
          </li>
          <li>
            <a href="{{ route('Pedidos_Panel') }}" class=" block p-3 border-gray-900 hover:text-orange-400">
              <i class="fa-solid fa-truck-fast fa-fw"></i>              
              <span class="hidden-item px-1">Pedidos</span>          
            </a>  
          </li>
        </ul>
      </div>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="block p-4 text-center bg-gray-900 w-full">
          <i class="fas fa-power-off text-red-500"></i>
        </button>
      </form>
     
    </div>
    <div class="flex-1 h-full min-h-screen">
      <div class="bg-white p-3 py-5">&nbsp;Bienvenido, al Panel de Administración <span class=" font-bold text-md text-blue-800"> {{auth()->user()->username}} </span></div>
      <div class="bg-white m-3 p-3" style="min-height: calc(100vh - 75px);">
        @yield('contenido')
      
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
     
 </body>   

 </html>



