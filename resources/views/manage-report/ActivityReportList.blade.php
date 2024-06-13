<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LAPORAN AKHIR AKTIVITI') }}
        </h2>
    </x-slot>
    <div class="container mx-auto p-6">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Aktiviti</th>
                    <th class="border px-4 py-2">Tarikh</th>
                    <th class="border px-4 py-2">Masa</th>
                    <th class="border px-4 py-2">Penglibatan</th>
                    <th class="border px-4 py-2">Tempat</th>
                    <th class="border px-4 py-2">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                    <tr>                        
                        <td class="border px-4 py-2">{{ ($activity->activityName) }}</td>
                        <td class="border px-4 py-2">{{ ($activity->date) }}</td>
                        <td class="border px-4 py-2">{{ ($activity->time) }}</td>
                        <td class="border px-4 py-2">{{ $activity->studentInvolved }}</td>
                        <td class="border px-4 py-2">{{ $activity->venue }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('activity-report-form', $activity->activityID) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Hantar Laporan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
