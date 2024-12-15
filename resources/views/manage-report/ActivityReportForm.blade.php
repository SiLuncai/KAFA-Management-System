<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">LAPORAN AKHIR AKTIVITI</h1>
        <h2 class="text-xl mb-4">MAKLUMAT PROGRAM</h2>
        <form action="{{ route('activities.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">NAMA PROGRAM</label>
                <input type="text" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ $activity->activityName }}" readonly>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">TARIKH PROGRAM</label>
                <input type="text" id="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ ($activity->date) }}" readonly>
            </div>
            <div class="mb-4">
                <label for="time" class="block text-sm font-medium text-gray-700">MASA PROGRAM</label>
                <input type="text" id="time" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ ($activity->time)}}" readonly>
            </div>
            <div class="mb-4">
                <label for="studentInvolved" class="block text-sm font-medium text-gray-700">PENGLIBATAN</label>
                <input type="text" id="studentInvolved" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ $activity->studentInvolved }}" readonly>
            </div>
            <div class="mb-4">
                <label for="venue" class="block text-sm font-medium text-gray-700">TEMPAT PROGRAM</label>
                <input type="text" id="venue" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ $activity->venue }}" readonly>
            </div>
            <div class="mb-4">
                <label for="budget" class="block text-sm font-medium text-gray-700">PERUNTUKAN PROGRAM</label>
                <input type="number" id="budget" name="budget" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ $report->budget ?? '' }}" required>
            </div>
            <div class="mb-4">
                <label for="impact" class="block text-sm font-medium text-gray-700">IMPAK PROGRAM</label>
                <textarea id="impact" name="impact" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>{{ $report->impact ?? '' }}</textarea>
            </div>
            <div class="mb-4">
                <label for="date_submitted" class="block text-sm font-medium text-gray-700">TARIKH LAPORAN DIHANTAR</label>
                <input type="date" id="date_submitted" name="date_submitted" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ $report->date_submitted ?? '' }}" required>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('activity-report-list') }}" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Batal</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
