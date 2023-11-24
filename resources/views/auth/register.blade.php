<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <img style="border-radius: 20px; margin-left:150px;; margin-top:15px;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM1iCBP6qiyMrfUTIjrnJC2Zs-KFo9DfxdI9Lxem1i8HOUXEHc" alt="" width="70px" height="70px">
    <h1 style="color:white; font-size:22px; margin-top:15px; font-weight:bold;">É hora de ter o controle nas suas mãos</h1>
    <p style="color:white;font-size:18px;margin-left:80px;
    margin-top:15px; margin-bottom:15px;">Crie a sua conta e comece a <br> transformar as suas finanças</p>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-white hover:text-yellow dark:hover:text-yellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
            <a href="/login" class="text-black">
                {{ __('Entrar') }}
            </a>
            </x-primary-button>
        </div>
        <x-primary-button01 class="ml-12 mt-7">
    <a href="{{ route('google-auth') }}" class=" font-semibold text-white dark:text-gray-1000 dark:hover:text-black flex items-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-black-400 "><img src="https://www.svgrepo.com/show/303108/google-icon-logo.svg" width="30" height="30" style="margin-right: 10px;"> Continuar com o Google</a>
</x-primary-button>
      
       
    </form>
</x-guest-layout>

