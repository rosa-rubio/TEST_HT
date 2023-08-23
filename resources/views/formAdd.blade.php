<x-app-layout>
    <form class="form" method="POST" action="{{ route('formAddNewCard.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="box-line">
            <h3>Crear destino</h3>
        </div>
        <div class="flex">

            <div class="box-half">
                <label for="title" value="__('Título')">Título
                </label>
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus
                    placeholder="Escribe el título..." />

                <label for="location" value="__('Ubicación')">Ubicación</label>

                <input id="location" class="block mt-1 w-full" type="text" name="location" required autofocus
                    placeholder="Escribe la ubicación..." />

                <label for="image">
                    Imagen
                    <div class="flexbox-file">
                        <div class="file"><img src="{{ asset('assets/File-icon.svg') }}" alt="Elegir file"></div>
                        <div class="file-text">Sube
                            una imagen...</div>
                    </div>

                    <input id="image" class="hidden" type="file" name="image" autofocus />
                </label>


                <div class="buttons-end">
                    <button class="rounded-pill btn-accept button" type="submit">
                        {{ __('Aceptar') }}
                    </button>
                    <button class="rounded-pill btn-cancel button">
                        <a href="/dashboard">
                            Cancelar
                        </a>
                    </button>
                </div>
            </div>
            <div class="box-half">
                <label>¿Por qué quieres viajar allí?</label>
                <textarea name="description" rows="10"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
            </div>
        </div>
    </form>
</x-app-layout>