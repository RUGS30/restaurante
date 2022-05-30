@extends('layouts.app')

@section('titulo')

   Menu

@endsection

@section('contenido')

             
            <div class="container mx-auto grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">

             @foreach ($products as $product )
            
                <div class="bg-black mx-auto rounded-lg  shadow-lg max-w-xs md:max-w-none w-64 overflow-hidden">
                    <img class="h-56 lg:h-60 w-full object-cover" src="{{ Storage::disk('local')->url('imagenesProducts/'.$product->image)}}" alt="" />
                    <div class="p-3">
                        <h3 class="font-semibold text-xl leading-6 text-white text-bold my-3">
                            {{ $product->name }}
                        </h3>
                        <p class="paragraph-normal text-gray-200 mb-3">
                            {{ $product->description }}
                        </p>
                        <p class="paragraph-normal text-2xl mb-2 text-gray-200">
                            ${{ $product->price }}
                        </p>
                        <div class="flex justify-end">
                            <a class="mt-2 font-bold px-3 py-1.5 rounded-lg w-fit" style="background-color: rgb(223, 203, 49)" href="{{ route('AddToCartProduct', ['id'=>$product->id]) }}">Añadir al Carrito </a>
                        </div>
                    </div>
                </div>
                @endforeach
        
            </div>
            
               
@endsection