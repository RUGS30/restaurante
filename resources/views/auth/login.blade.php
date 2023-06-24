<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serrecom - Login</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/fe383ea4e7.js" crossorigin="anonymous"></script>

    </head>

<body >
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
          <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
              <img src="{{ asset('img/logo.png') }}" alt="logo" width="150" srcset="" />
              <h1 class="mb-2 text-2xl">Serrecom</h1>
              <span class="text-gray-300">Ingresa las Credenciales</span>
            </div>
            <form  action="{{ route('login') }}"   method="POST"  novalidate>
                @csrf 
                @if (session('mensaje'))
                    <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                    {{ session('mensaje') }}
                     </p>     
                @endif
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-blue-100 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                id="email"
                type="email"
                name="email"
                placeholder="Tu E-mail de registro" />
              </div>
      
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-blue-100 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" 
                id="password"
                type="password"
                name="password"
                placeholder="Tu Contraseña" />
                @error('password')

                <p class="text-white text-center text-sm  my-2 rounded-lg bg-red-600 p-2">
                   {{ $message }}
                 </p>
                 
                @enderror
            </div>
              <div class="mt-8 flex justify-center text-lg text-black">
                <input 
                type="submit"
                value="Iniciar Sesión"
                class="rounded-3xl bg-blue-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-blue-600">
              </div>
            </form>
          </div>
        </div>
      </div>
        



 </body>   

 </html>



