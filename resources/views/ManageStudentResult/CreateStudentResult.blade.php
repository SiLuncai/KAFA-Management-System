<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student Result') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('PENTAKSIRAN BILIK DARJAH') }}
                    </h2>
                </header>


            </div>
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white light:bg-gray-800 shadow sm:rounded-lg">
        <div class='row'>

            <body class="bg-gray-100">
                <div class="container mx-auto p-4">
                    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <h4 class="text-lg font-semibold">Result
                                <a href="{{ url('try') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Back</a>
                            </h4>
                        </div>
                        <div class="p-6">
                            <form action="{{ url('try/create') }}" method="POST">
                                @csrf

                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                    <span class="text-red-500">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label for="marks" class="block text-gray-700">Marks</label>
                                    <input type="text" name="marks" id="marks" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('marks') }}" required>
                                    @if ($errors->has('marks'))
                                    <span class="text-red-500">{{ $errors->first('marks') }}</span>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label for="grade" class="block text-gray-700">Grade</label>
                                    <input type="text" name="grade" id="grade" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('grade') }}" required>
                                    @if ($errors->has('grade'))
                                    <span class="text-red-500">{{ $errors->first('grade') }}</span>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </body>


        </div>
    </div>
</x-app-layout>