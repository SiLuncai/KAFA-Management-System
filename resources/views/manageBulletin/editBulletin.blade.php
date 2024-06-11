<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Bulletin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('bulletins.update', $bulletins->bulletinID) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="titleBulletin" class="form-label">Title</label>
                            <input type="text" class="form-control" id="titleBulletin" name="titleBulletin" value="{{ $bulletins->titleBulletin }}">
                        </div>
                        <div class="mb-3">
                            <label for="descBulletin" class="form-label">Description</label>
                            <textarea class="form-control" id="descBulletin" name="descBulletin">{{ $bulletins->descBulletin }}</textarea>
                        </div>
                        <!-- Add input fields for other bulletin details -->
                        <form action="{{ route('bulletins.update', ['bulletinID' => $bulletins->bulletinID]) }}" method="POST">
                            @csrf
                            @method('post')
                            <!-- Your form fields here -->
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
