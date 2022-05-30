@extends('layouts.app')

@section('titulo')
Inicio

@endsection

@section('contenido')

     <section id="nosotros">
        <div class="w-full bg-cover bg-center " style="height:25rem; background-image: url({{ asset('img/banner.jpg') }}">
            <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Hamburguesas El Wero</h1>
                    <button class="mt-4 px-4 py-2 bg-black  text-sm uppercase font-medium rounded hover:bg-gray-800 focus:outline-none focus:bg-black-500" style="color: #c8b82b">Realiza tu pedido</button>
                </div>
            </div>
        </div>
    
    
        <div class="flex flex-col lg:flex-row shadow mt-5">
            <div class="lg:w-1/2 px-8 lg:p">
    
            <h1 class="pt-5 mb-3 sm:mt-4 text-4xl font-bold leading-tight" style="color: #c8b82b">
                Sobre Nosotros
    
            </h1>
                <p class="text-white  text-1xl text-justify p-3">
                    Bienvenido a un pequeño trozo de historia en el Estado de México, en Hamburguesas "El Wero" ha sido un hito local desde su establecimiento en el año 2017. Desde entonces, no ha cambiado mucho. Todavía utilizamos las mismas recetas pasadas de generación en generación, agregando mucho amor en cada platillo que preparamos para nuestros clientes.
                </p>
              
            </div>
    
            <div class="block lg:w-1/2 sm:mt-3">
                <img class="inset-0 h-72 w-full object-cover" src="{{ asset('img/nosotros.jpeg') }}" alt="">
            </div>
    
        </div>

     </section>


   

    <section class="py-8" id="contacto">
        <div class="container mx-auto ">
            <h3 class="text-4xl font-bold text-center " style="color: #c8b82b">Contacto</h3>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-7" >
                <div class="py-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7839879060703!2d-99.03356748509051!3d19.4217370460606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fcbc3a7a5f9f%3A0xbb2004fa6b582635!2sVirgen%20de%20Zapopan%2037%2C%20Virgencitas%2C%2057300%20Nezahualc%C3%B3yotl%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1653712028835!5m2!1ses!2smx" width="100%" height="450" class="px-4" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="px-3">
                    <form action="" method="post">
                        <div class="md:flex items-center mt-12">
                            <div class="w-full md:w-1/2 flex flex-col">
                                <label class="font-semibold leading-none" style="color: #c8b82b">Nombre</label>
                                <input type="text" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" placeholder="Escribe tu Nombre " />
                            </div>
                            <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                                <label class="font-semibold leading-none" style="color: #c8b82b">Teléfono</label>
                                <input type="email" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" placeholder="Escribe tu Teléfono "/>
                            </div>
                        </div>
                        <div class="md:flex items-center mt-8">
                            <div class="w-full flex flex-col">
                                <label class="font-semibold leading-none" style="color: #c8b82b">Asunto</label>
                                <input type="text" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" placeholder="Escribe el Asunto "/>
                            </div>
                            
                        </div>
                        <div>
                            <div class="w-full flex flex-col mt-8">
                                <label class="font-semibold leading-none" style="color: #c8b82b">Mensaje</label>
                                <textarea type="text" class="h-40 text-base leading-none text-gray-900 p-2 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" placeholder="Escribe tu dudas o sugerencias.. "></textarea>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full">
                            <button class="mt-9 font-semibold leading-none py-4 px-10 bg-black rounded hover:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none" style="color: #c8b82b ">
                                Enviar Mensaje
                            </button>
                        </div>
                    </form>
                    
                </div>
        
            </div>
    
        </div>

    </section>

    

  

 
@endsection
