<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">LAPORAN AKADEMIK PELAJAR</h1>
    
        <form action="{{ route('student-academic-report') }}" method="POST" id="filterForm">
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
                <div class="form-group">
                    <label for="class_id" class="block text-sm font-medium text-gray-700">Kelas</label>
                    <select name="class_id" id="class_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="">Pilih kelas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="student_id" class="block text-sm font-medium text-gray-700">Nama</label>
                    <select name="student_id" id="student_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="">Pilih nama pelajar</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Papar</button>
        </form>
    
        @if (isset($resultsFound) && $resultsFound)
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-2">SLIP KEPUTUSAN - PEPERIKSAAN AKHIR TAHUN - {{ $student->year->name }}</h2>
                <p class="mb-1">No. KP / Sijil Lahir: {{ $student->myKidNo }}</p>
                <p class="mb-1">Nama: {{ $student->name }}</p>
                <p class="mb-1">Tahun: {{ $student->year->name }}</p>
                <p class="mb-4">Kelas: {{ $student->class->name }}</p>
    
                <table class="min-w-full divide-y divide-gray-200 mb-4">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bil</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mata Pelajaran</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Markah</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gred</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($subjectResults as $index => $result)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $result->subject->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $result->marks }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $result->grade }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <p class="mb-2">Nama Guru Kelas: [Teacher's Name]</p>
                <p class="mb-4">Keputusan: [Result]</p>
                <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="window.print()">Cetak</button>
            </div>
        @elseif (isset($resultsFound) && !$resultsFound)
            <p class="mt-4">DATA TIDAK DIJUMPAI</p>
        @endif
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const yearSelect = document.getElementById('year_id');
        const classSelect = document.getElementById('class_id');
        const studentSelect = document.getElementById('student_id');
    
        yearSelect.addEventListener('change', function () {
            fetchClasses(this.value);
        });
    
        classSelect.addEventListener('change', function () {
            fetchStudents(this.value);
        });
    
        function fetchClasses(yearId) {
            classSelect.innerHTML = '<option value="">Pilih kelas</option>';
            studentSelect.innerHTML = '<option value="">Pilih nama pelajar</option>';
            if (yearId) {
                fetch(`/get-classes/${yearId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(classItem => {
                            const option = document.createElement('option');
                            option.value = classItem.id;
                            option.textContent = classItem.name;
                            classSelect.appendChild(option);
                        });
                    });
            }
        }
    
        function fetchStudents(classId) {
            studentSelect.innerHTML = '<option value="">Pilih nama pelajar</option>';
            if (classId) {
                fetch(`/get-students/${classId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(student => {
                            const option = document.createElement('option');
                            option.value = student.id;
                            option.textContent = student.name;
                            studentSelect.appendChild(option);
                        });
                    });
            }
        }
    });
    </script>
    </x-app-layout>
    