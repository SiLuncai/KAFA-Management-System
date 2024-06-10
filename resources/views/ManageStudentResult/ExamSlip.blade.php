<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Result') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('SEMAK SLIP PEPERIKSAAN PELAJAR') }}
                    </h2>
                </header>

                <body class="bg-gray-100">
                    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
                        <div class="bg-gray-200 p-5 rounded-lg mb-8">
                            <h2 class="text-center text-xl font-semibold mb-4">Slip Keputusan - Peperiksaan Akhir Tahun - 2023</h2>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-gray-700 font-bold">No. KP / Sijil Lahir:</label>
                                    <p class="bg-gray-100 p-2 rounded">021215060103</p>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold">Tahun:</label>
                                    <p class="bg-gray-100 p-2 rounded">5</p>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold">Nama:</label>
                                    <p class="bg-gray-100 p-2 rounded">RASYIDAH BINTI MOHD NOOR</p>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold">Kelas:</label>
                                    <p class="bg-gray-100 p-2 rounded">BESTARI</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold">Nama Sekolah:</label>
                                <p class="bg-gray-100 p-2 rounded">SAR AR RAUDHAH TANJUNG LUMPUR</p>
                            </div>
                            <table class="w-full bg-gray-100 rounded-lg mb-4">
                                <thead>
                                    <tr>
                                        <th class="border p-2">Bil</th>
                                        <th class="border p-2">Mata Pelajaran</th>
                                        <th class="border p-2">Markah</th>
                                        <th class="border p-2">Gred</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border p-2 text-center">1.</td>
                                        <td class="border p-2">Al-Quran</td>
                                        <td class="border p-2 text-center">85</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">2.</td>
                                        <td class="border p-2">Tahfiz Al-Quran</td>
                                        <td class="border p-2 text-center">89</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">3.</td>
                                        <td class="border p-2">Bahasa Arab</td>
                                        <td class="border p-2 text-center">85</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">4.</td>
                                        <td class="border p-2">Sirah</td>
                                        <td class="border p-2 text-center">90</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">5.</td>
                                        <td class="border p-2">Jawi & Khat</td>
                                        <td class="border p-2 text-center">87</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">6.</td>
                                        <td class="border p-2">Ibadah</td>
                                        <td class="border p-2 text-center">80</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">7.</td>
                                        <td class="border p-2">Aqidah</td>
                                        <td class="border p-2 text-center">88</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                    <tr>
                                        <td class="border p-2 text-center">8.</td>
                                        <td class="border p-2">Adab</td>
                                        <td class="border p-2 text-center">83</td>
                                        <td class="border p-2 text-center">A</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold">Nama Guru Kelas:</label>
                                <p class="bg-gray-100 p-2 rounded">NOORHAN BINTI HADI</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold">Ulasan Guru Kelas:</label>
                                <p class="bg-gray-100 p-2 rounded">TAHNIAH. SEMOGA BERJAYA DALAM PEPERIKSAAN UPKK</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold">Keputusan:</label>
                                <p class="bg-gray-100 p-2 rounded">LULUS</p>
                            </div>
                        </div>
                    </div>
                </body>
            </div>


        </div>
</x-app-layout>