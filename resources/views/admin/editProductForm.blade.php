@extends('layouts.dashboard')

@section('contenido')

  
            <!-- component -->

<!-- ====== Contact Section Start -->
<section class="bg-white py-20 lg:py-[20px]  overflow-hidden relative z-10">
   <div class="container">
      <div class="flex flex-wrap lg:justify-between -mx-4">
         <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
            <div class="bg-blue-200 relative rounded-xl   p-8 sm:p-12 shadow-xl">
                <h3 class="mb-4 font-bold text-center text-2xl">Editar Producto</h3>

               <form action="/admin/updateProduct/{{ $product->id }}" method="POST">
                @csrf
                  <div class="mb-6">
                      <label for="name" class="block my-3">Nombre Producto</label>
                     <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Nombre del Platillo"
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
                        value="{{ $product->name }}"
                        />
                  </div>
                  <div class="mb-6">
                    <label for="description" class="block my-3">Descripción</label>

                     <input
                        id="description"
                        type="text"
                        name="description"
                        placeholder="Descripción"
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
                        value="{{ $product->description }}"
                        />
                  </div>
                  <div class="mb-6">
                    <label for="type" class="block my-3">Tipo</label>
                     <input
                        id="type"
                        type="text"
                        name="type"
                        placeholder="Tipo"
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
                        value="{{ $product->type }}"

                        />
                  </div>
                  <div class="mb-6">
                    <label for="price" class="block my-3">Precio</label>
                    <input
                    id="price"
                    type="text"
                    name="price"
                    placeholder="Precio"
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
                    value="{{ $product->price }}"

                    />
                   
                  </div>
                  <div>
                     <button
                        type="submit"
                        name="submit"
                        class="
                        w-full
                        bg-blue-500
                        text-white
                        bg-primary
                        rounded
                        p-3
                        transition
                        hover:bg-opacity-90
                        "
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
<!-- ====== Contact Section End -->
            

    

@endsection