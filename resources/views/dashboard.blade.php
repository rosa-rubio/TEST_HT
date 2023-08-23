<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($form_add_new_cards as $form_add_new_card)
        <div class="p-6 flex space-x-2">
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <div>
                        <img src="{{ asset('storage/' . $form_add_new_card->image) }}" alt="Image">
                    </div>

                    <div>
                        <span class="text-gray-800">{{ $form_add_new_card->title }}</span>
                    </div>
                    <div>
                        <span class="text-gray-800">{{ $form_add_new_card->location }}</span>
                    </div>

                    @if ($form_add_new_card->user->is(auth()->user()))
                    <div class="flex space-x-2">
                        <a href="{{ route('details', $form_add_new_card) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            <img src="{{ asset('assets/Info-icon.svg') }} " alt="Mostrar mas info"></a>
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
                    @endif


                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>