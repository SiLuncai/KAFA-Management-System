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

                <div class="col-span-2 bg-white rounded-lg shadow-md p-4">
                    <div class="text-center mb-4">
                    </div>
                    <h1 class="text-2xl font-bold mb-4">Majlis Ugama Islam Dan Adat Resam Melayu Pahang (MUIP)</h1>
                    <h2 class="text-lg font-bold mb-4">SEMAK SLIP PEPERIKSAAN PELAJAR</h2>

                    <div class="mb-4">
                        <label for="carian_pelajar" class="block text-gray-700 text-sm font-bold mb-2">
                            LANGKAH 1: CARIAN PELAJAR
                        </label>
                        <input type="text" id="carian_pelajar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="NO. KP/SIJIL LAHIR">
                    </div>

                    <div class="mb-4">
                        <label for="carian_sekolah" class="block text-gray-700 text-sm font-bold mb-2">
                            LANGKAH 2: CARIAN SEKOLAH
                        </label>

                        <div class="flex mb-2">
                            <label for="daerah" class="block text-gray-700 text-sm font-bold mb-2">
                                DAERAH
                            </label>
                            <select id="daerah" class="block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
                                <option value="">--PILIH DAERAH--</option>
                                <option value="daerah1">KUANTAN</option>
                                <option value="daerah2">PEKAN</option>
                                <option value="daerah3">TEMERLOH</option>
                                <option value="daerah3">JENGKA</option>
                                <option value="daerah3">LIPIS</option>
                                <option value="daerah3">MARAN</option>
                                <option value="daerah3">CAMERON HIGHLAND</option>
                            </select>
                        </div>

                        <div class="flex mb-2">
                            <label for="nama_sekolah" class="block text-gray-700 text-sm font-bold mb-2">
                                NAMA SEKOLAH
                            </label>
                            <select id="nama_sekolah" class="block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
                                <option value="">--PILIH SEKOLAH--</option>
                                <option value="sekolah1">SK PEKAN</option>
                                <option value="sekolah2">SAR KAFA Nurul Aman</option>
                                <option value="sekolah3">SAR KAFA AL HAFIZIN</option>
                            </select>
                        </div>

                    </div>

                    <div class="flex justify-center">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">SEMAK</button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>