<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            View Bulletin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($bulletins as $bulletin)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold">{{ $bulletin->titleBulletin }}</h1>
                        <p class="mt-2">{{ $bulletin->descBulletin }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
