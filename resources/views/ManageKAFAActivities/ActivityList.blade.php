<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Activity Management Page') }}
        </h2>
    </x-slot>



    <!-- Content -->
    <div class="py-12">
        <div class="leading-tight">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                            <div class="bg-green-500 text-white py-2 px-4 mb-4 rounded-lg">
                                <h1 class="text-lg font-semibold">Activity Management</h1>
                            </div>

                            <!-- Search Bar -->
                            <div class="px-4 py-2">
                                <form action="{{ route('admin.search') }}" type="GET">
                                    <input type="search" name="search" id="searchInput" class="max-w-md w-full px-4 py-2 border rounded-md" placeholder="Search activities...">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
                                </form>
                            </div>

                            <div class="overflow-x-auto px- py-4">

                                    <table class="mx-auto table-auto border-collapse border border-gray-300">
                                        <thead>
                                            <tr>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Activity Name</th>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Date</th>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Time</th>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Student Involved</th>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Venue</th>
                                                <th class="bg-white border border-gray-300 px-8 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($activities as $activity)
                                            <tr>
                                                <td class="text-white border border-gray-300 px-8 py-8">{{ $activity->activityName }}</td>
                                                <td class="text-white border border-gray-300 px-8 py-8">{{ $activity->date }}</td>
                                                <td class="text-white border border-gray-300 px-8 py-8">{{ $activity->time }}</td>
                                                <td class="text-white border border-gray-300 px-8 py-8">{{ $activity->studentInvolved }}</td>
                                                <td class="text-white border border-gray-300 px-8 py-8">{{ $activity->venue }}</td>
                                                <td class="text-white border border-gray-300 px-8 py-8">
                                                    <a href="{{ route('activity.edit', ['activity' => $activity->activityID]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded font-size: 2px">Edit</a>
                                                    <a href="{{ route('activity.destroy', ['activity' => $activity->activityID]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="event.preventDefault();
                                                    if(confirm('Are you sure you want to delete this activity?'))
                                                    {
                                                        document.getElementById('delete-activity-{{ $activity->activityID }}').submit();
                                                    }">Delete
                                                    </a>
                                                    <form id="delete-activity-{{ $activity->activityID }}" action="{{ route('activity.destroy', ['activity' => $activity->activityID]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                    <div class="flex justify-center mt-4">
                        <a href="{{ route('activities.create') }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Activity</a>
                    </div>
                    </div>

            </div>
        </div>
    </div>

</x-app-layout>

