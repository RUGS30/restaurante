@extends('layouts.app')

@section('titulo')

   Registro

@endsection

@section('contenido')

    <h1 class="text-3xl text-center py-7 font-bold" style="color: #c8b82b">
        @yield('titulo') de Usuarios
    </h1>

    <div class="md:flex pt-7 md:justify-center md:gap-10  md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}"  alt="Img-Registro" class="w-full md"
            >
        </div> 
        <div class="md:w-4/12 bg-black p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf 
                <div class="mb-5">
                    <label for="name" class="mb-3 block uppercase font-bold " style="color: #d09827">
                        Nombre
                    </label>
                    <input class="border rounded-lg p-2 w-full  @error('name') border-red-600  @enderror" 
                    value="{{ old('name') }}" 
                    id="name"
                    type="text"
                    name="name"
                    placeholder="Tu Nombre"
                    >
                    @error('name')

                       <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                          {{ $message }}
                        </p>
                        
                    @enderror


                </div>

                <div class="mb-5">
                    <label for="username" class="mb-3 block uppercase  font-bold " style="color: #d09827">
                         Usuario
                    </label>
                    <input class="border rounded-lg p-2 w-full  @error('username') border-red-600  @enderror"
                    value="{{ old('username') }}"  
                    id="username"
                    type="text"
                    name="username"
                    placeholder="Tu Nombre de Usuario"
                    >
                </div>

                @error('username')

                <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                   {{ $message }}
                 </p>
                 
             @enderror

                <div class="mb-5">
                    <label for="email" class="mb-3 block uppercase  font-bold " style="color: #d09827">
                        E-mail
                    </label>
                    <input class="border rounded-lg p-2 w-full  @error('email') border-red-600  @enderror"
                    value="{{ old('email') }}"  
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Tu E-mail de registro"
                    >
                    @error('email')

                    <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                       {{ $message }}
                     </p>
                     
                     @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-3 block uppercase  font-bold " style="color: #d09827">
                        Contraseña
                    </label>
                    <input class="border rounded-lg p-2 w-full  @error('password') border-red-600  @enderror"
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Tu Contraseña"
                    >
                    @error('password')

                    <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                       {{ $message }}
                     </p>
                     
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-3 block uppercase  font-bold " style="color: #d09827">
                        Repetir Contraseña
                    </label>
                    <input class="rounded-lg p-2 w-full" 
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="Repite tu Contraseña"
                    >
                </div>

                <input 
                     type="submit"
                     value="Crear Cuenta"
                     class="bg-gray-900 hover:bg-gray-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg"
                     style="color: #c8b82b"
                
                
                >
            </form>
        </div>
         

    </div>


@endsection