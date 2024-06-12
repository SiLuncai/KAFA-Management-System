<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">LAPORAN AKADEMIK TAHUN</h1>
    
        <form action="{{ route('year-academic-report') }}" method="POST" id="filterForm">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                <div class="form-group">
                    <label for="year_id" class="block text-sm font-medium text-gray-700">Tahun</label>
                    <select name="year_id" id="year_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="">Pilih tahun</option>
                        @foreach($years as $year)
                            <option value="{{ $year->id }}" {{ request('year_id') == $year->id ? 'selected' : '' }}>{{ $year->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Papar</button>
        </form>
    
        @if (isset($resultsFound) && $resultsFound)
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-2">LAPORAN AKADEMIK TAHUN</h2>
                <table class="min-w-full divide-y divide-gray-200 mb-4">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bil</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Angka Giliran</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Peratus</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kedudukan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($students as $index => $student)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->myKidNo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ number_format($student->average_marks, 2) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $student->ranking }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="window.print()">Cetak</button>
            </div>
        @elseif (isset($resultsFound) && !$resultsFound)
            <p class="mt-4">DATA TIDAK DIJUMPAI</p>
        @endif
    </div>
    </x-app-layout>
    