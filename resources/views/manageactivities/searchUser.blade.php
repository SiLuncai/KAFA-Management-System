<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Activity Page') }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="py-12">
        <div class="leading-tight">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                            <div class="bg-green-500 text-white py-2 px-4 mb-4 rounded-lg">
                                <h1 class="text-lg font-semibold">Activity List</h1>
                            </div>

                            <div class="overflow-x-auto px- py-4">

                                    <table class="mx-auto table-auto border-collapse border border-gray-300">
                                        <thead>
                                            <tr>
                                                <th class="bg-white border border-gray-300 px-9 py-4">Activity Name</th>
                                                <th class="bg-white border border-gray-300 px-9 py-4">Date</th>
                                                <th class="bg-white border border-gray-300 px-9 py-4">Time</th>
                                                <th class="bg-white border border-gray-300 px-9 py-4">Student Involved</th>
                                                <th class="bg-white border border-gray-300 px-9 py-4">Venue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($activities as $activity)
                                            <tr>
                                                <td class="text-white border border-gray-300 px-9 py-8">{{ $activity->activityName }}</td>
                                                <td class="text-white border border-gray-300 px-9 py-8">{{ $activity->date }}</td>
                                                <td class="text-white border border-gray-300 px-9 py-8">{{ $activity->time }}</td>
                                                <td class="text-white border border-gray-300 px-9 py-8">{{ $activity->studentInvolved }}</td>
                                                <td class="text-white border border-gray-300 px-9 py-8">{{ $activity->venue }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                    <div class="flex justify-center mt-4">
                        <a href="{{ route('activity.getData') }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Return</a>
                    </div>


                    </div>

            </div>
        </div>
    </div>

</x-app-layout>
