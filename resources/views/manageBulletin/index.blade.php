<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bulletins
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('bulletins.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Create New Bulletin</a>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 bg-gray-50"></th> <!-- Add a column for the edit button -->
                                <th class="px-6 py-3 bg-gray-50"></th> <!-- Add a column for the delete button -->
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($bulletins as $bulletin)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $bulletin->titleBulletin }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $bulletin->descBulletin }}</td>
                                <td class="px-1 py-1 whitespace-no-wrap">
                                    <a href="{{ route('bulletins.edit', $bulletin->bulletinID) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </td>
                                <td class="px-1 py-1 whitespace-no-wrap">
                                    <form action="{{ route('bulletins.destroy', $bulletin->bulletinID) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this bulletin?');">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
