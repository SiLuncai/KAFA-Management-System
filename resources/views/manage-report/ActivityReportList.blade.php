<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">LAPORAN AKHIR AKTIVITI</h1>
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
                        <td class="border px-4 py-2">
                            <a href="{{ route('activity-report-form', $activity->id) }}" class="text-blue-500 hover:underline">{{ $activity->name }}</a>
                        </td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($activity->date)->format('M d') }}</td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($activity->time)->format('h:i A') }}</td>
                        <td class="border px-4 py-2">{{ $activity->studentInvolved }}</td>
                        <td class="border px-4 py-2">{{ $activity->venue }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('activity-report-form', $activity->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Hantar Laporan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
