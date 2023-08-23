<x-app-layout>
    <div>
        <img src="{{ asset('storage/' . $form_add_new_card->image) }}" alt="Image">
    </div>

    <div>
        <span class="text-gray-800">{{ $form_add_new_card->title }}</span>
    </div>
    <div>
        <span class="text-gray-800">{{ $form_add_new_card->location }}</span>
    </div>
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
    <div>
        <span class="text-gray-800">{{ $form_add_new_card->description }}</span>
    </div>
</x-app-layout>