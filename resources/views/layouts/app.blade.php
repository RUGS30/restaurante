<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>El Wero - @yield('titulo')</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/fe383ea4e7.js" crossorigin="anonymous"></script>

    </head>

<body  class="bg-zinc-800 min-h-screen leading-none">
       
    <header>
      @guest
        <nav class="bg-black border-gray-200 px-2 sm:px-4 py-4  ">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/inicio" class="flex items-center">
                <img src="{{ asset('img/logo.jpeg') }}" class="mr-3 h-16.5 sm:h-32 w-24 sm:w-32" alt="Logo">
                </a>
 
                  <div class="flex md:order-2">
                    <a href="{{ route('carrito') }}"><i class="fa-solid fa-cart-shopping text-1xl text-white"></i></a>
                    <button data-collapse-toggle="mobile-menu-4" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-4" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    </button>
                  </div>

                  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                      <li>
                        <a href="/inicio" class="block py-2 pr-4 pl-3 text-white">Inicio</a>
                      </li>
                      <li>
                        <a href="/inicio/#nosotros" class="block py-2 pr-4 pl-3 text-white">Nosotros</a>
                      </li>
                      <li>
                        <a href="/menu" class="block py-2 pr-4 pl-3 text-white">Menu</a>
                      </li>
                      <li>
                       <a href="/inicio/#contacto" class="block py-2 pr-4 pl-3 text-white">Contacto</a>
                      </li>
                    </ul>
                 </div>
           
           </div>
         </nav>
         @endguest

         @auth
         <nav class="bg-blue-400 py-5 px-9">
          <div class="flex justify-between ">
            <div>
              <i class="fa fa-user-circle text-white text-lg" aria-hidden="true"><span class="px-2 font-bold">RG ADMIN</span> </i>
            </div>
            <div class="flex flex-row gap-2">
              <a href="" class="text-white">
                <p>Pedidos</p>
              </a>
              <a href="" class="text-white">
                <p>Agregar</p>
              </a>
              <a href="" class="text-white">
                <p>Usuarios</p>
              </a>


            </div>
            <div>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-white font-bold text-lg">
                     Cerrar Sesión
                </button>
   
              </form>   
            </div>
          </div>
          <div class="flex justify-end align-middle px-4">
                        
          </div>  

         </nav>
      
        
        
        @endauth
     </header>

     <main>

           
            @yield('contenido')






     </main>


    


    </body>

    </html>
