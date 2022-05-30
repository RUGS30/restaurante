@extends('layouts.dashboard')

@section('contenido')

<h2 class="font-bold text-3xl py-7">Editar Imagen</h2>

<h3 class="font-bold py-3">Imagen Actual</h3>
<div class="py-4">
    <img src="{{ asset('storage')}}/imagenesProducts/{{ $product['image'] }}" width="200" height="200" alt="imagenactual">
</div>

<form action="/admin/updateProductImage/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-6">
        <label class="font-bold block mb-3 " for="description">Actualizar Imagen</label>
        <input
           id="image"
           type="file"
           name="image"
           placeholder="Imagen"
           class="
           w-full
           rounded
           py-4
           px-[14px]
           text-body-color text-base
           border border-[f0f0f0]
           outline-none
           focus-visible:shadow-none
           focus:border-primary
           "
           value="{{ $product->image }} "
           required

           />
     </div>

     <button
         type="submit"
         name="submit"
         class="
         w-full
         bg-blue-500
         text-white
         bg-primary
         rounded
         border border-primary
         p-3
         transition
         hover:bg-opacity-90
         "
         >
         Enviar
    </button>

</form>



@endsection