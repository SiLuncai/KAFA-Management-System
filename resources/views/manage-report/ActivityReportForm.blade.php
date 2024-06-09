<x-app-layout>
    <div class="bg-gray-100 p-4">
        <div class="max-w-4xl mx-auto bg-white p-4 shadow rounded">
            <header class="text-center mb-4">
                <h1 class="text-2xl font-bold">LAPORAN AKHIR AKTIVITI</h1>
            </header>

            <div class="border-t-2 border-gray-200 mt-8 pt-8">
                <div class="text-left mb-6 ml-4">
                    <h2 class="text-lg font-semibold">MAKLUMAT PROGRAM</h2>
                </div>

                <form class="text-left mb-6 space-y-6 ml-4">
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/4">NAMA PROGRAM:</label>
                        <p class="w-3/4">KAFA Open Day</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/4">TARIKH PROGRAM:</label>
                        <p class="w-3/4">Sep 22</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/4">MASA PROGRAM:</label>
                        <p class="w-3/4">7:30 a.m - 5:30 p.m</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/4">PENGELIBATAN:</label>
                        <p class="w-3/4">All Students</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/4">TEMPAT PROGRAM:</label>
                        <p class="w-3/4">School Field</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label for="bilangan-peserta" class="font-semibold w-1/4">BILANGAN PESERTA:</label>
                        <input type="number" id="bilangan-peserta" class="w-3/4 mt-1 block pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="flex items-center space-x-4">
                        <label for="impak-program" class="font-semibold w-1/4">IMPAK PROGRAM:</label>
                        <textarea id="impak-program" rows="3" class="w-3/4 mt-1 block pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                    </div>
                    <div class="flex items-center space-x-4">
                        <label for="peruntukan-program" class="font-semibold w-1/4">PERUNTUKAN PROGRAM:</label>
                        <input type="number" id="peruntukan-program" class="w-3/4 mt-1 block pl-3 pr-10 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="flex justify-end space-x-4 mt-8">
                        <button type="reset" class="bg-gray-300 text-gray-700 py-2 px-4 rounded">BATAL</button>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
