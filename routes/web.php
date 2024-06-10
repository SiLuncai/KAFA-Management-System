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
    Route::get('/ManageStudentResult', [StudentResultController::class, 'searchExamList'])->name('ManageStudentResult.searchExamList'); //nama method dkt controller
    
});




require __DIR__.'/auth.php';
