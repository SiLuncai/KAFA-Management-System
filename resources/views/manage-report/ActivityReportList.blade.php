<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">LAPORAN AKHIR AKTIVITI</h1>
    
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktiviti</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tarikh</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengelibatan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tindakan</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($activities as $activity)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('activity-report-form', $activity->id) }}" class="text-blue-500 hover:text-blue-700">{{ $activity->name }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $activity->date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $activity->time }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $activity->studentInvolved }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $activity->venue }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('activity-report-form', $activity->id) }}" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Hantar Laporan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-app-layout>
    