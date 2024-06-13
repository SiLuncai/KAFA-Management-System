<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Bulletin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('bulletins.store') }}" method="POST">
                        @csrf
                        <!-- Teacher ID -->
                        <div>
                            <x-input-label for="teacherID" :value="__('Teacher ID')" />
                            <x-text-input id="teacherID" name="teacherID" type="text" class="mt-1 block w-full" :value="auth()->user()->id" readonly />
                        </div>
                        
                        <div>
                            <!-- Title -->
                            <x-input-label for="titleBulletin" :value="__('Title')" />
                            <x-text-input id="titleBulletin" name="titleBulletin" type="text" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('titleBulletin')" />
                        </div>
                        
                        <div>
                            <!-- Description -->
                            <x-input-label for="descBulletin" :value="__('Description')" />
                            <textarea id="descBulletin" name="descBulletin" class="mt-1 block w-full"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('descBulletin')" />
                        </div>

                        <div class="flex items-center gap-4 mt-4">
                            <!-- Submit Button -->
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('success') === 'Bulletin created successfully')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
