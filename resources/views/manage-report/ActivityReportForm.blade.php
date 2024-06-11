<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">LAPORAN AKHIR AKTIVITI</h1>
    
        <form action="{{ route('save-activity-report', $activity->id) }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">NAMA PROGRAM</label>
                    <input type="text" name="name" id="name" value="{{ $activity->name }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-200 rounded-md shadow-sm" readonly>
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">TARIKH PROGRAM</label>
                    <input type="text" name="date" id="date" value="{{ $activity->date }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-200 rounded-md shadow-sm" readonly>
                </div>
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700">MASA PROGRAM</label>
                    <input type="text" name="time" id="time" value="{{ $activity->time }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-200 rounded-md shadow-sm" readonly>
                </div>
                <div>
                    <label for="studentInvolved" class="block text-sm font-medium text-gray-700">PENGELIBATAN</label>
                    <input type="text" name="studentInvolved" id="studentInvolved" value="{{ $activity->studentInvolved }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-200 rounded-md shadow-sm" readonly>
                </div>
                <div>
                    <label for="venue" class="block text-sm font-medium text-gray-700">TEMPAT PROGRAM</label>
                    <input type="text" name="venue" id="venue" value="{{ $activity->venue }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-200 rounded-md shadow-sm" readonly>
                </div>
                <div>
                    <label for="budget" class="block text-sm font-medium text-gray-700">BILANGAN PESERTA</label>
                    <input type="number" name="budget" id="budget" value="{{ old('budget') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="col-span-2">
                    <label for="impact" class="block text-sm font-medium text-gray-700">IMPAK PROGRAM</label>
                    <textarea name="impact" id="impact" rows="4" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm" required>{{ old('impact') }}</textarea>
                </div>
                <div>
                    <label for="date_submitted" class="block text-sm font-medium text-gray-700">PERUNTUKAN PROGRAM</label>
                    <input type="date" name="date_submitted" id="date_submitted" value="{{ old('date_submitted') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button type="button" class="btn btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
    </x-app-layout>
    