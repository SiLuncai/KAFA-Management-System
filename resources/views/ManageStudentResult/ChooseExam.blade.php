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
                        <div class="bg-gray-200 p-5 rounded-lg">
                            <h2 class="text-center text-xl font-semibold mb-4">Semak Slip Peperiksaan Pelajar</h2>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">No. KP / Sijil Lahir:</label>
                                <p class="bg-gray-100 p-2 rounded">021215060103</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">Nama:</label>
                                <p class="bg-gray-100 p-2 rounded">RASYIDAH BINTI MOHD NOOR</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">Nama Sekolah:</label>
                                <p class="bg-gray-100 p-2 rounded">SAR AR RAUDHAH TANJUNG LUMPUR</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">Tahun:</label>
                                <p class="bg-gray-100 p-2 rounded">15</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">Kelas:</label>
                                <p class="bg-gray-100 p-2 rounded">BESTARI</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2">Keputusan Peperiksaan:</label>
                                <select class="block w-full bg-gray-100 p-2 rounded border border-gray-300">
                                    <option>PEPERIKSAAN AWAL TAHUN</option>
                                    <option>PEPERIKSAAN PERTENGAHAN TAHUN</option>
                                    <option>PEPERIKSAAN PERCUBAAN UPKK</option>
                                    <option>PEPERIKSAAN AKHIR TAHUN</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Papar Slip Keputusan</button>
                            </div>
                        </div>
                    </div>
                </body>
            </div>


        </div>
    </div>
</x-app-layout>