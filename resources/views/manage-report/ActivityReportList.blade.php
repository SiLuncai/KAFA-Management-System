<x-app-layout>
    <div class="bg-gray-100 p-4">
        <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
            <header class="text-center mb-4">
                <h1 class="text-2xl font-bold">LAPORAN AKHIR AKTIVITI</h1>
                <div class="flex justify-center space-x-4 mt-4">
                    <div>
                        <label for="academic-session" class="block text-sm font-medium text-gray-700">Sesi Akademik</label>
                        <select id="academic-session" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="2022/2023">2022/2023</option>
                        </select>
                    </div>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded">Paparan</button>
                </div>
            </header>

            <div class="border-t-2 border-gray-200 mt-4 pt-4">
                <div class="text-left mb-4">
                    <p class="font-semibold">AKTIVITI</p>
                </div>

                <table class="w-full border-collapse border border-gray-300 mb-4">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2">Aktiviti</th>
                            <th class="border border-gray-300 p-2">Tarikh</th>
                            <th class="border border-gray-300 p-2">Masa</th>
                            <th class="border border-gray-300 p-2">Pengelibatan</th>
                            <th class="border border-gray-300 p-2">Tempat</th>
                            <th class="border border-gray-300 p-2">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td class="border border-gray-300 p-2">{{ $activity->name }}</td>
                                <td class="border border-gray-300 p-2 text-center">{{ \Carbon\Carbon::parse($activity->date)->format('M d') }}</td>
                                <td class="border border-gray-300 p-2 text-center">{{ \Carbon\Carbon::parse($activity->time)->format('g:i a') }}</td>
                                <td class="border border-gray-300 p-2 text-center">{{ $activity->involvement }}</td>
                                <td class="border border-gray-300 p-2 text-center">{{ $activity->location }}</td>
                                <td class="border border-gray-300 p-2 text-center"><button class="bg-blue-500 text-white py-1 px-2 rounded">Hantar Laporan</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="flex justify-between items-center mt-4">
                    <div class="flex space-x-2">
                        <button class="bg-gray-300 text-gray-700 py-1 px-3 rounded">&lt;</button>
                        <span>Page 1 of 1</span>
                        <button class="bg-gray-300 text-gray-700 py-1 px-3 rounded">&gt;</button>
                    </div>
                    <div>
                        <label for="rows-per-page" class="block text-sm font-medium text-gray-700">Rows per page</label>
                        <select id="rows-per-page" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
