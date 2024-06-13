<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentResultController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CheckSlip', function () {
    return view('ManageStudentResult.CheckSlip');
});

Route::get('/ExamList', function () {
    return view('ManageStudentResult.ExamList');
});

Route::get('/StudentList', function () {
    return view('ManageStudentResult.StudentList');
});

Route::get('/ChooseExam', function () {
    return view('ManageStudentResult.ChooseExam');
});

Route::get('/ExamSlip', function () {
    return view('ManageStudentResult.ExamSlip');
});

Route::get('/example', function () {
    return view('ManageStudentResult.example');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/ManageStudentResult', [StudentResultController::class, 'navigatetoExamList'])->name('ManageStudentResult.navigatetoExamList'); //nama method dkt controller
    Route::get('/ManageStudentResult/insertExamResult', [StudentResultController::class, 'insertExamResult'])->name('ManageStudentResult.StudentList');
   
});

Route::post('/ManageStudentResult', [StudentResultController::class, 'searchExamList'])->name('ExamList.searchExamList');


//Route::get('nama page', [App\Http\Controllers\StudentResultController::class, 'function/method']);
Route::get('try', [App\Http\Controllers\StudentResultController::class, 'index']);
Route::get('try/create', [App\Http\Controllers\StudentResultController::class, 'create']);
Route::post('try/create', [App\Http\Controllers\StudentResultController::class, 'store']);
Route::get('try/{id}/edit', [App\Http\Controllers\StudentResultController::class, 'edit']);
Route::put('try/{id}/edit', [App\Http\Controllers\StudentResultController::class, 'update']);
Route::get('try/{id}/delete', [App\Http\Controllers\StudentResultController::class, 'destroy']);





require __DIR__.'/auth.php';
