<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('formAddNewCard.update', $form_add_new_cards) }}"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <p class="underline">Editar destino</p>

            <div>
                <x-label for="title" :value="__('Título')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus
                    placeholder="Escribe el título..." value="{{ old('title', $form_add_new_cards->title) }}" />
            </div>
            <div>
                <x-label for="location" :value="__('Ubicación')" />

                <x-input id="location" class="block mt-1 w-full" type="text" name="location" required autofocus
                    placeholder="Escribe la ubicación..."
                    value="{{ old('location', $form_add_new_cards->location) }}" />
            </div>
            <div>
                <x-label for="image" :value="__('Imagen')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" autofocus
                    placeholder="Sube una imagen" value="{{ old('image', $form_add_new_cards->image) }}" />
            </div>
            <textarea name="description" placeholder="¿Por qué quieres viajar allí?"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description', $form_add_new_cards->description) }}</textarea>
            <x-button class="ml-4">
                {{ __('Aceptar') }}
            </x-button>
            <button class="ml-3">
                <a href="/dashboard">
                    Cancelar
                </a>
            </button>
        </form>
    </div>
</x-app-layout>