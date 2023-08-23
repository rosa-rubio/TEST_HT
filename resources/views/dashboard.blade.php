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
                    <div class="flex flex-icons">
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
                            <div class="modal-dialog modal-width">
                                <div class="modal-content rounded-4">
                                    <div class="modal-body rounded-4">
                                        <p>¿Quieres eliminar este destino?</p>
                                        <div class="buttons">
                                            <form method="POST"
                                                action="{{ route('formAddNewCard.destroy', $form_add_new_card) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="rounded-pill btn-accept button"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    Aceptar
                                                </button>
                                            </form>
                                            <button type="button" class="btn-cancel button rounded-pill"
                                                data-bs-dismiss="modal">Cancelar</button>
                                        </div>
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