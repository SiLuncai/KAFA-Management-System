<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
        <header class="text-center mb-4">
            <h1 class="text-2xl font-bold">LAPORAN AKADEMIK PELAJAR</h1>
            <div class="flex justify-center space-x-4 mt-4">
                <div>
                    <label for="academic-session" class="block text-sm font-medium text-gray-700">Sesi Akademik</label>
                    <select id="academic-session" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="2022/2023">2022/2023</option>
                    </select>
                </div>
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Tahun</label>
                    <select id="year" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <label for="class" class="block text-sm font-medium text-gray-700">Kelas</label>
                    <select id="class" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="BESTARI">BESTARI</option>
                    </select>
                </div>
                <div>
                    <label for="student-name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="student-name" placeholder="ALI BIN ABU" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
        </header>

        <div class="text-center my-4">
            <button class="bg-blue-500 text-white py-2 px-4 rounded">Paparan</button>
        </div>

        <div class="border-t-2 border-gray-200 mt-4 pt-4">
            <div class="text-center mb-4">
                <h2 class="text-xl font-semibold">Majlis Ugama Islam Dan Adat Resam Melayu Pahang (MUIP)</h2>
                <h3 class="text-lg font-medium">SLIP KEPUTUSAN - PEPERIKSAAN AKHIR TAHUN - 2023</h3>
            </div>

            <div class="text-left mb-4">
                <p>NO. KP / SIJIL LAHIR: 021215060103</p>
                <p>NAMA: RASYIDAH BINTI MOHD NOOR</p>
                <p>TAHUN: 5</p>
                <p>KELAS: BESTARI</p>
                <p>SAR AR RAUDHAH TANJUNG LUMPUR</p>
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
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">1.</td>
                        <td class="border border-gray-300 p-2">Al-Quran</td>
                        <td class="border border-gray-300 p-2 text-center">85</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">2.</td>
                        <td class="border border-gray-300 p-2">Tahfiz Al-Quran</td>
                        <td class="border border-gray-300 p-2 text-center">90</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">3.</td>
                        <td class="border border-gray-300 p-2">Bahasa Arab</td>
                        <td class="border border-gray-300 p-2 text-center">83</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">4.</td>
                        <td class="border border-gray-300 p-2">Sirah</td>
                        <td class="border border-gray-300 p-2 text-center">75</td>
                        <td class="border border-gray-300 p-2 text-center">B</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">5.</td>
                        <td class="border border-gray-300 p-2">Jawi & Khat</td>
                        <td class="border border-gray-300 p-2 text-center">95</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">6.</td>
                        <td class="border border-gray-300 p-2">Ibadah</td>
                        <td class="border border-gray-300 p-2 text-center">80</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">7.</td>
                        <td class="border border-gray-300 p-2">Aqidah</td>
                        <td class="border border-gray-300 p-2 text-center">73</td>
                        <td class="border border-gray-300 p-2 text-center">B</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">8.</td>
                        <td class="border border-gray-300 p-2">Adab</td>
                        <td class="border border-gray-300 p-2 text-center">83</td>
                        <td class="border border-gray-300 p-2 text-center">A</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-left mb-4">
                <p>NAMA GURU KELAS: NOORIHAN BINTI HADI</p>
                <p>KEPUTUSAN: LULUS</p>
            </div>

            <div class="text-center">
                <button class="bg-gray-500 text-white py-2 px-4 rounded" onclick="window.print()">Cetak</button>
            </div>
        </div>
    </div>
</x-app-layout>
