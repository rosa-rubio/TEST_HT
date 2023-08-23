<x-guest-layout>
    <link href="{{ asset('css/Register.css') }}" rel="stylesheet">



    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <p class="underline">Registro de usuario</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Nombre')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
                placeholder="Escribe tu nombre..." />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('E-Mail')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                placeholder="Escribe tu e-mail..." />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Contraseña')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="Escribe tu contraseña..." />
        </div>



        <div class="flex items-center justify-end mt-4">
            <div class="flex items-center justify-end mt-4">

                <button class="ml-4 btn-register" >
                    {{ __('Aceptar') }}
                </button>
                <button class="ml-4 btn-aceptar" >
                    <a href="/">
                        Cancelar
                    </a>
                </button>
            </div>

        </div>
        <p class= "p2">¿Ya tienes cuenta? Accede
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('aqui') }}
            </a>
        </p>

    </form>

</x-guest-layout>