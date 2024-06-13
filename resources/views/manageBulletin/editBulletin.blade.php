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
                            <x-input-label for="titleBulletin" :value="__('Bulletin Title')" />
                            <x-text-input id="titleBulletin" name="titleBulletin" type="text" class="mt-1 block w-full"/>
                            <x-input-error class="mt-2" :messages="$errors->get('titleBulletin')" />
                        </div>
                        <div class="mb-3">
                            <x-input-label for="descBulletin" :value="__('Bulletin Description')" />
                            <x-text-input id="descBulletin" name="descBulletin" type="text" class="mt-1 block w-full"/>
                            <x-input-error class="mt-2" :messages="$errors->get('descBulletin')" />
                        </div>

                        <form action="{{ route('bulletins.update', ['bulletinID' => $bulletins->bulletinID]) }}" method="POST">
                            @csrf
                            @method('post')

                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
