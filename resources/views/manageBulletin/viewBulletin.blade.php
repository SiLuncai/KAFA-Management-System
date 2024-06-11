<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            View Bulletin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold">{{ $bulletin->titleBulletin }}</h1>
                    <p class="mt-2 text-gray-600">Teacher: {{ $bulletin->teacher->name }}</p>
                    <p class="mt-2 text-gray-600">Parent: {{ $bulletin->parent->name }}</p>
                    <p class="mt-2">{{ $bulletin->descBulletin }}</p>
                    <p class="mt-2">Comment: {{ $bulletin->comment }}</p>
                    <p class="mt-2">Like: {{ $bulletin->like }}</p>
                    
                    <!-- Like Button -->
                    @if (Auth::check() && Auth::user()->role === 'parent')
                        <!-- Like Button -->
                        <form action="{{ route('bulletins.like', $bulletin->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Like</button>
                        </form>

                        <!-- Comment Form -->
                        <form action="{{ route('bulletins.comment', $bulletin->id) }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="comment">Leave a Comment:</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>

                        <!-- Delete Button -->
                        <form action="{{ route('bulletins.delete', $bulletin->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
