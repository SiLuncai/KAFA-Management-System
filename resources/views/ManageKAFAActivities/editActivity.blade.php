<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Activity') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <form method="POST" action="{{ route('activity.update', ['activity' => $activityDetail->activityID]) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="activityName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Activity Name</label>
                            <input type="text" name="activityName" id="activityName" value="{{ $activityDetail->activityName }}" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Date</label>
                            <input type="date" name="date" id="date" value="{{ $activityDetail->date }}" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="time" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Time</label>
                            <input type="time" name="time" id="time" value="{{ $activityDetail->time }}" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="studentInvolved" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Student Involved</label>
                            <input type="text" name="studentInvolved" id="studentInvolved" value="{{ $activityDetail->studentInvolved }}" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="venue" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Venue</label>
                            <input type="text" name="venue" id="venue" value="{{ $activityDetail->venue }}" class="mt-1 block w-full">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('activity.getDataAdmin') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
