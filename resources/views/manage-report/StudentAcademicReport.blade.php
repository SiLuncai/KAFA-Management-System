<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
        <header class="text-center mb-4">
            <h1 class="text-2xl font-bold">LAPORAN AKADEMIK PELAJAR</h1>
            <form id="filter-form" action="{{ route('reports.generate') }}" method="POST" class="grid grid-cols-4 gap-4 mt-4">
                @csrf
                <div class="col-span-1">
                    <label for="academic-session" class="block text-sm font-medium text-gray-700">Sesi Akademik</label>
                    <select id="academic-session" name="academic_session" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="2022/2023">2022/2023</option>
                    </select>
                </div>
                <div class="col-span-1">
                    <label for="year" class="block text-sm font-medium text-gray-700">Tahun</label>
                    <select id="year" name="year_id" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih tahun</option>
                        @foreach($years as $year)
                            <option value="{{ $year->id }}">{{ $year->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-1">
                    <label for="class" class="block text-sm font-medium text-gray-700">Kelas</label>
                    <select id="class" name="class_id" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled>
                        <option value="">Pilih kelas</option>
                    </select>
                </div>
                <div class="col-span-1">
                    <label for="student-name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <select id="student-name" name="student_id" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled>
                        <option value="">Pilih nama pelajar</option>
                    </select>
                </div>
                <div class="col-span-4 text-center my-4">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded" disabled>Paparan</button>
                </div>
            </form>
        </header>

        @if(isset($student))
        <div class="border-t-2 border-gray-200 mt-4 pt-4">
            <div class="text-center mb-4">
                <h2 class="text-xl font-semibold">Majlis Ugama Islam Dan Adat Resam Melayu Pahang (MUIP)</h2>
                <h3 class="text-lg font-medium">SLIP KEPUTUSAN - PEPERIKSAAN AKHIR TAHUN - 2023</h3>
            </div>

            <div class="text-left mb-4">
                <p>NO. KP / SIJIL LAHIR: {{ $student->myKidNo }}</p>
                <p>NAMA: {{ $student->name }}</p>
                <p>TAHUN: {{ $student->year->name }}</p>
                <p>KELAS: {{ $student->class->name }}</p>
                <p>{{ $student->school->name }}</p>
            </div>

            <table class="w-full border-collapse border border-gray-300 mb-4">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">Bil</th>
                        <th class="border border-gray-300 p-2">Mata Pelajaran</th>
                        <th class="border border-gray-300 p-2">Markah</th>
                        <th class="border border-gray-300 p-2">Gred</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student->subjectResults as $index => $result)
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">{{ $index + 1 }}.</td>
                            <td class="border border-gray-300 p-2">{{ $result->subject->name }}</td>
                            <td class="border border-gray-300 p-2 text-center">{{ $result->marks }}</td>
                            <td class="border border-gray-300 p-2 text-center">{{ $result->grade }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-left mb-4">
                <p>NAMA GURU KELAS: [Teacher's Name]</p>
                <p>KEPUTUSAN: LULUS</p>
            </div>

            <div class="text-center">
                <button class="bg-gray-500 text-white py-2 px-4 rounded" onclick="window.print()">Cetak</button>
            </div>
        </div>
        @else
        <div class="text-center mt-8">
            <p class="text-gray-500">DATA TIDAK DIJUMPAI</p>
        </div>
        @endif
    </div>

    <script>
        document.getElementById('year').addEventListener('change', function() {
            const yearId = this.value;
            const classSelect = document.getElementById('class');
            const studentSelect = document.getElementById('student-name');
            classSelect.innerHTML = '<option value="">Pilih kelas</option>';
            studentSelect.innerHTML = '<option value="">Pilih nama pelajar</option>';
            studentSelect.disabled = true;
            document.querySelector('button[type="submit"]').disabled = true;

            if (yearId) {
                fetch('{{ route('reports.classes') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ year_id: yearId })
                })
                .then(response => response.json())
                .then(data => {
                    classSelect.disabled = false;
                    data.forEach(classItem => {
                        const option = document.createElement('option');
                        option.value = classItem.id;
                        option.textContent = classItem.name;
                        classSelect.appendChild(option);
                    });
                });
            } else {
                classSelect.disabled = true;
            }
        });

        document.getElementById('class').addEventListener('change', function() {
            const classId = this.value;
            const studentSelect = document.getElementById('student-name');
            studentSelect.innerHTML = '<option value="">Pilih nama pelajar</option>';
            document.querySelector('button[type="submit"]').disabled = true;

            if (classId) {
                fetch('{{ route('reports.students') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ class_id: classId })
                })
                .then(response => response.json())
                .then(data => {
                    studentSelect.disabled = false;
                    data.forEach(student => {
                        const option = document.createElement('option');
                        option.value = student.id;
                        option.textContent = student.name;
                        studentSelect.appendChild(option);
                    });
                });
            } else {
                studentSelect.disabled = true;
            }
        });

        document.getElementById('student-name').addEventListener('change', function() {
            const studentId = this.value;
            document.querySelector('button[type="submit"]').disabled = !studentId;
        });
    </script>
</x-app-layout>
