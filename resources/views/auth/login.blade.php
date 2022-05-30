<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>El Wero - Login</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.jpeg') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/fe383ea4e7.js" crossorigin="anonymous"></script>

    </head>

<body  class="bg-zinc-800 min-h-screen leading-none">

    <header class="py-7">
        <h1 class="text-4xl text-center py-7 font-bold" style="color: #d9ca3e">
            Inicio de Sesión
        </h1>

    </header>

   

    <div class="md:flex pt-7 md:justify-center md:gap-10 py-7  md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}"  alt="Img-Login" class="w-full md"
            >
        </div> 
        <div class="md:w-4/12 bg-black p-6 rounded-lg shadow-xl">
            <form  action="{{ route('login') }}"   method="POST"  novalidate>
                @csrf 
                @if (session('mensaje'))
                    <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                    {{ session('mensaje') }}
                     </p>     
                @endif
              
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
                    <input type="checkbox" name="remember"><label class="text-white text-sm uppercase px-2">Mantener mi sesión abierta</label>

                </div>


                <input 
                     type="submit"
                     value="Iniciar Sesión"
                     class="bg-gray-900 hover:bg-gray-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg"
                     style="color: #d09827"
                >
            </form>
        </div>
         
    </div>
     
 </body>   

 </html>



