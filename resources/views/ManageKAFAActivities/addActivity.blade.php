<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Activity') }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="py-12">
        <div class="leading-tight">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <form method="POST" action="{{ route('activities.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="activityName" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Activity Name:</label>
                            <input type="text" name="activityName" id="activityName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Date:</label>
                            <input type="date" name="date" id="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="time" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Time:</label>
                            <input type="time" name="time" id="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="studentInvolved" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Student Involved:</label>
                            <input type="text" name="studentInvolved" id="studentInvolved" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="mb-4">
                            <label for="venue" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Venue:</label>
                            <input type="text" name="venue" id="venue" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Activity</button>
                            <a href="{{ route('activity.getDataAdmin') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
