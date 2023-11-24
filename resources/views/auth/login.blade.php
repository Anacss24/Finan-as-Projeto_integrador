<x-guest-layout>
<!-- Session Status -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM1iCBP6qiyMrfUTIjrnJC2Zs-KFo9DfxdI9Lxem1i8HOUXEHc" type="image/png">
      
    <title>Finanças</title>
</head>
<body>
    

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <img style="border-radius: 20px; margin-left:150px;; margin-top:15px;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM1iCBP6qiyMrfUTIjrnJC2Zs-KFo9DfxdI9Lxem1i8HOUXEHc" alt="" width="70px" height="70px">
    <h1 style="color:white; font-size:25px; margin-left:90px; margin-top:15px;">Bem-vindo de Volta</h1>
    <div> 
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Senha')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-white border-black dark:border-gray-700 text-yellow 
            shadow-sm focus:ring-yellow
            dark:focus:ring-yellow dark:focus:ring-offset-gray-800" name="remember">
            <span class="ml-2 text-sm text-black dark:text-white">{{ __('Lembre-se de mim') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-black dark:text-white hover:text-yellow dark:hover:text-yellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
            {{ __('Esqueceu sua senha?') }}
        </a>
        @endif

        <x-primary-button class="ml-3 text-white">
            <a href="/dashboard" class="text-black">
                {{ __('Login') }}
            </a>
        </x-primary-button>
    </div>
</form>
<x-primary-button01 class="ml-12 mt-7">
    <a href="{{ route('google-auth') }}" class=" font-semibold text-white dark:text-gray-1000 dark:hover:text-black flex items-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-black-400 "><img src="https://www.svgrepo.com/show/303108/google-icon-logo.svg" width="30" height="30" style="margin-right: 10px;"> Continuar com o Google</a>
</x-primary-button>
</x-guest-layout>
</body>
</html>