<x-guest-layout>



    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p class="underline">Acceso de usuario</p>
        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('E-Mail')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus placeholder="Escribe tu e-mail..." />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Contraseña')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="Escribe tu contraseña..." />
        </div>


        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-3">
                Aceptar
            </x-button>
            <button class="ml-3">
                <a href="/">
                    Cancelar
                </a>
            </button>
        </div>
    </form>

</x-guest-layout>