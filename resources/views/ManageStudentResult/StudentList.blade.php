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
                        {{ __('PENTAKSIRAN BILIK DARJAH') }}
                    </h2>
                </header>

                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div>
                        <label for="sesi_akademik" class="block text-sm font-medium leading-6 text-white">SESI AKADEMIK:</label>
                        <input type="text" id="sesi_akademik" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                    <div>
                        <label for="tahun" class="block text-sm font-medium leading-6 text-white">TAHUN:</label>
                        <input type="text" id="tahun" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                    <div>
                        <label for="jenis_peperiksaan" class="block text-sm font-medium leading-6 text-white">JENS PEPERIKSAAN:</label>
                        <input type="text" id="jenis_peperiksaan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                    <div>
                        <label for="matapelajaran" class="block text-sm font-medium leading-6 text-white">MATAPELAJARAN:</label>
                        <input type="text" id="matapelajaran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                    <div>
                        <label for="kelas" class="block text-sm font-medium leading-6 text-white">KELAS:</label>
                        <input type="text" id="kelas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mt-50">
                        <table  class="block text-sm font-medium leading-6 text-white">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">BIL</th>
                                    <th class="px-4 py-2">NAMA</th>
                                    <th class="px-4 py-2">ANGKA GILIRAN</th>
                                    <th class="px-4 py-2">MARKAH</th>
                                    <th class="px-4 py-2">GRED</th>
                                    <th class="px-4 py-2">ULASAN GURU</th>
                                    <th class="px-4 py-2">STATUS</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-10 py-2">ALI BIN ABU</td>
                                    <td class="border px-4 py-2">UPKK001</td>
                                    <td class="border px-4 py-2">
                                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    </td>
                                    <td class="border px-4 py-2">
                                        <select class="shadow appearance-none border rounded w-full py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </td>
                                    
                                    <td class="border px-4 py-2">
                                        <select class="shadow appearance-none border rounded w-full py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="TAHNIAH KEKALKAN KECEMERLANGAN ANDA">TAHNIAH KEKALKAN KECEMERLANGAN ANDA</option>
                                            <option value="BANYAKKAN LATIHAN">BANYAKKAN LATIHAN</option>
                                            <option value="USAHA LAGI">USAHA LAGI</option>
                                        </select>
                                    </td>
                                    <td class="border px-4 py-2">SUDAH DITAFSIR</td>
                                </tr>


                            </tbody>
                        </table>

                        <div class="sm:col-span-2">
                            <div class="mt-2">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">SIMPAN</button>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">HANTAR</button>
                            </div>
                          




                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>