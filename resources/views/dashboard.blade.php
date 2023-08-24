<x-app-layout>
    <div class="grid-container">
        @foreach ($form_add_new_cards as $form_add_new_card)
        <div>
            <div>
                <div class="card-container">
                    <div class="container-image" >
                        <img class="card-image" src="{{ asset('storage/' . $form_add_new_card->image) }}" alt="Image">
                        <a class="icon-info" href="{{ route('details', $form_add_new_card) }}">
                             <img class="info" src="{{ asset('assets/Info-icon.svg') }} " alt="Mostrar mas info"></a>
                    </div>
                <div class="container-ud">
                    <div class="text-container">
                        <span class="card-title">{{ $form_add_new_card->title }}</span>
                        <span class="card-location">{{ $form_add_new_card->location }}</span>
                    </div>

                    @if ($form_add_new_card->user->is(auth()->user()))
                    <div class="icons-ud">
                        
                        <a href="{{ route('formAddNewCard.edit', $form_add_new_card) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            <img src="{{ asset('assets/Edit-icon.svg') }}"
                                alt="Editar"></a>
                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="{{ asset('assets/Delete-icon.svg') }}" alt="Borrar">
                        </button>
                    </div>

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