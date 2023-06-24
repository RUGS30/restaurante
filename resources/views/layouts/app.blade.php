<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serrecom - @yield('titulo')</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/fe383ea4e7.js" crossorigin="anonymous"></script>

    </head>

<body  class="bg-zinc-800 min-h-screen leading-none">
       
    <header>
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

     </header>

     <div class="container-fluid ">
      @include('layouts.alert')

     </div>

     <main>
       


           
            @yield('contenido')






     </main>


     <footer>
       <!-- component -->
<!-- This is an example component -->
<div class=" mx-auto">

	<footer class="p-4 rounded-lg shadow md:px-6 md:py-8 bg-black">
		<div class="sm:flex sm:items-center sm:justify-between">
			<a href="#" target="_blank" class="flex items-center mb-4 sm:mb-0">
				<img src="{{ asset('img/logo.jpeg') }}" class="mr-4 h-8" alt="ElWero Logo" />
				<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">El Wero</span>
			</a>
			<ul class="flex flex-wrap items-center mb-6 sm:mb-0">
				<li>
					<a href="/inicio/#nosotros" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Acerca de</a>
				</li>
			
	
				<li>
					<a href="/inicio/#contacto" class="text-sm text-gray-500 hover:underline dark:text-gray-400">Contacto</a>
				</li>
			</ul>
		</div>
		<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
		<span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" target="_blank" class="hover:underline">EQ.4</a>. Todos los derechos reservados.
    </span>
	</footer>


</div>
     </footer>

     


    </body>

    </html>
