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
                            class="text-indigo-600 hover:text-indigo-900">Details</a>
                        <a href="{{ route('formAddNewCard.edit', $form_add_new_card) }}"
                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form method="POST" action="{{ route('formAddNewCard.destroy', $form_add_new_card) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600 hover:text-red-900"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Delete
                            </button>
                        </form>
                    </div>
                    @endif


                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>