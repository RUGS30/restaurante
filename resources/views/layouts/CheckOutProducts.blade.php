@extends('layouts.app')


@section('contenido')


<section class="bg-zinc-800 py-20 lg:py-[20px]  overflow-hidden relative z-10">
    <div class="container">
       <div class="flex flex-wrap lg:justify-center -mx-4">
          <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
             <div class="bg-black relative rounded-xl   p-8 sm:p-12 shadow-xl">
                 <h3 class="mb-4 font-bold text-center text-2xl" style="color: #c8b82b;" >Datos de Envío</h3>
 
                <form action="/product/createNewOrder" method="post">
                 @csrf
                   <div class="mb-6">
                       <label for="name" class="block my-3 text-white">Nombre</label>
                      <input
                         type="text"
                         id="name"
                         name="name"
                         placeholder="Nombre y Apellido "
                         class="
                         w-full
                         rounded
                         py-3
                         px-3
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         />
                   </div>
                   <div class="mb-6">
                     <label for="description" class="block my-3 text-white">Dirección</label>
 
                      <input
                         id="address"
                         type="text"
                         name="address"
                         placeholder="Dirección de envio"
                         class="
                         w-full
                         rounded
                         py-3
                         px-3
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         />
                   </div>
                 
                   <div class="mb-6">
                     <label for="type" class="block my-3 text-white">Codígo Postal</label>
                      <input
                         id="zip"
                         type="text"
                         name="zip"
                         placeholder="Codígo Postal"
                         class="
                         w-full
                         rounded
                         py-3
                         px-3
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                        
 
                         />
                   </div>
                   <div class="mb-6">
                     <label for="price" class="block my-3 text-white">Teléfono</label>
                     <input
                     id="phone"
                     type="text"
                     name="phone"
                     placeholder="Teléfono"
                     class="
                     w-full
                     rounded
                     py-3
                     px-3
                     text-body-color text-base
                     border border-[f0f0f0]
                     outline-none
                     focus-visible:shadow-none
                     focus:border-primary
                     "
                     
 
                     />
                    
                   </div>
                   <div class="mb-6">
                    <label for="type" class="block my-3 text-white">Total a Pagar</label>
                     <input
                        id="price"
                        type="text"
                        name="price"
                        placeholder="$"
                        class="
                        w-full
                        rounded
                        py-3
                        px-3
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-primary
                        "
                    

                        />
                  </div>
                   <div>
                      <button
                         type="submit"
                         name="submit"
                         class="
                         w-full
                         bg-zinc-800
                         text-white
                         bg-primary
                         text-lg
                         font-bold
                         rounded
                         p-3
                         transition
                         hover:bg-opacity-90
                         "
                         style="color: #c8b82b;"
                         >
                      Enviar
                      </button>
                   </div>
                </form>
               
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection