<x-app-layout>
    <div class="flex w-75 mx-auto">
        <div class="image-container">
            <img src="{{ asset('storage/' . $form_add_new_card->image) }}" alt="Image" class="img-card">
        </div>
        <div class="w-50">
            <div class="flex head-details">
                <div>
                    <h1 class="title-details">{{ $form_add_new_card->title }}</h1>
                    <h2 class="location-details">{{ $form_add_new_card->location }}</h2>
                </div>
                <div class="flex">
                    <a href="{{ route('formAddNewCard.edit', $form_add_new_card) }}"
                        class="text-indigo-600 hover:text-indigo-900"><img src="{{ asset('assets/Edit-icon.svg') }}"
                            alt="Editar"></a>

                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('assets/Delete-icon.svg') }}" alt="Borrar">
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    ¿Quieres eliminar este destino?
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <form method="POST"
                                        action="{{ route('formAddNewCard.destroy', $form_add_new_card) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            Aceptar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <p class="description-details">{{ $form_add_new_card->description }}</p>

        </div>
    </div>

</x-app-layout>