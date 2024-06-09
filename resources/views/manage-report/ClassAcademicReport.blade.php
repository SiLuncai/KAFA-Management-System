<x-app-layout>
    <div class="bg-gray-100 p-4">
        <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
            <header class="text-center mb-4">
                <h1 class="text-2xl font-bold">LAPORAN AKADEMIK KELAS</h1>
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
                </div>
            </header>

            <div class="text-center my-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Paparan</button>
            </div>

            <div class="border-t-2 border-gray-200 mt-4 pt-4">
                <div class="text-left mb-4">
                    <p class="font-semibold">Majlis Ugama Islam Dan Adat Resam Melayu Pahang (MUIP)</p>
                </div>

                <table class="w-full border-collapse border border-gray-300 mb-4">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2">Bil</th>
                            <th class="border border-gray-300 p-2">Nama</th>
                            <th class="border border-gray-300 p-2">Angka Giliran</th>
                            <th class="border border-gray-300 p-2">Peratus</th>
                            <th class="border border-gray-300 p-2">Kedudukan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">1.</td>
                            <td class="border border-gray-300 p-2">Ali Bin Abu</td>
                            <td class="border border-gray-300 p-2 text-center">UPKK001</td>
                            <td class="border border-gray-300 p-2 text-center">99.99</td>
                            <td class="border border-gray-300 p-2 text-center">1/40</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">2.</td>
                            <td class="border border-gray-300 p-2">Muhammad Hafiz Bin Ahmad</td>
                            <td class="border border-gray-300 p-2 text-center">UPKK002</td>
                            <td class="border border-gray-300 p-2 text-center">82.34</td>
                            <td class="border border-gray-300 p-2 text-center">2/40</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">3.</td>
                            <td class="border border-gray-300 p-2">Hafizah Binti Hamdan</td>
                            <td class="border border-gray-300 p-2 text-center">UPKK003</td>
                            <td class="border border-gray-300 p-2 text-center">80.43</td>
                            <td class="border border-gray-300 p-2 text-center">3/40</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">4.</td>
                            <td class="border border-gray-300 p-2">Rasyidah Binti Mohd Noor</td>
                            <td class="border border-gray-300 p-2 text-center">UPKK004</td>
                            <td class="border border-gray-300 p-2 text-center">79.09</td>
                            <td class="border border-gray-300 p-2 text-center">4/40</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">5.</td>
                            <td class="border border-gray-300 p-2">Aina Binti Amin</td>
                            <td class="border border-gray-300 p-2 text-center">UPKK005</td>
                            <td class="border border-gray-300 p-2 text-center">77.34</td>
                            <td class="border border-gray-300 p-2 text-center">5/40</td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-center">
                    <button class="bg-gray-500 text-white py-2 px-4 rounded" onclick="window.print()">Cetak</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
