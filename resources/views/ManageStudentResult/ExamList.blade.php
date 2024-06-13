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

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Sila pilih jenis pentaksiran untuk dinilai") }}
                    </p>
                </header>


                <form action="{{ route('ExamList.searchExamList') }}" method="POST">
                    @csrf
                    <div class="max-w-xl">
                        <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-6 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="session" class="block text-sm font-medium leading-6 text-white">SESI AKADEMIK</label>
                                <div class="mt-2">
                                    <select id="session" name="session" autocomplete="academic-session" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="class" class="block text-sm font-medium leading-6 text-white">KELAS</label>
                                <div class="mt-2">
                                    <select id="class" name="class" autocomplete="class-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>ARIF</option>
                                        <option>BESTARI</option>
                                        <option>CEKAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="subject" class="block text-sm font-medium leading-6 text-white">MATAPELAJARAN</label>
                                <div class="mt-2">
                                    <select id="subject" name="subject" autocomplete="subject-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>JAWI</option>
                                        <option>SIRAH</option>
                                        <option>BAHASA ARAB</option>
                                        <option>IBADAH</option>
                                        <option>AL-QURAN</option>
                                        <option>AKIDAH</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-6 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="year" class="block text-sm font-medium leading-6 text-white">TAHUN</label>
                                <div class="mt-2">
                                    <select id="year" name="year" autocomplete="year" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="examtype" class="block text-sm font-medium leading-6 text-white">JENIS PEPERIKSAAN</label>
                                <div class="mt-2">
                                    <select id="examtype" name="examtype" autocomplete="exam-type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>PEPERIKSAAN AWAL TAHUN</option>
                                        <option>PEPERIKSAAN PERTENGAHAN TAHUN</option>
                                        <option>PEPERIKSAAN PERCUBAAN UPKK</option>
                                        <option>PEPERIKSAAN AKHIR TAHUN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="p-4 sm:p-8 bg-white light:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mt-50">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Bil</th>
                                    <th class="px-4 py-2">SESI AKADEMIK</th>
                                    <th class="px-4 py-2">JENIS PEPERIKSAAN</th>
                                    <th class="px-4 py-2">KELAS</th>
                                    <th class="px-4 py-2">MATAPELAJARAN</th>
                                    <th class="px-4 py-2">STATUS</th>
                                    <th class="px-4 py-2">TINDAKAN</th>
                                </tr>
                            </thead>

                            <tbody>
                                
                                    <tr>
                                        <td class="px-4 py-2">1</td>
                                        <td class="px-4 py-2"></td>
                                        <td class="px-4 py-2"></td>
                                        <td class="px-4 py-2"></td>
                                        <td class="px-4 py-2"></td>
                                        <td class="px-4 py-2">BELUM DITAFSIR</td>
                                        <td>
                                            <button type="delete" class="w-6 h-6">
                                                <img src="delete.png" alt="Delete" />
                                            </button>
                                            <a href="{{ route('ManageStudentResult.StudentList') }}">
                                                <button class="w-6 h-6">
                                                    <img src="edit.png" alt="Edit" />
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="7" class="px-4 py-2 text-center">No data found</td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>