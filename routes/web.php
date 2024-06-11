<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\StudentResultController;
use App\Http\Controllers\BulletinController;

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

// Index Route
Route::get('/bulletins', [BulletinController::class, 'index'])->name('bulletins.index');

// Create Route
Route::get('/bulletins/create', [BulletinController::class, 'create'])->name('bulletins.create');

// Store Route
Route::post('/bulletins', [BulletinController::class, 'store'])->name('bulletins.store');

// Show Route
Route::get('/bulletins/{bulletinID}', [BulletinController::class, 'show'])->name('bulletins.show');

// Like Bulletin Route
Route::post('/bulletins/{bulletinID}/like', [BulletinController::class, 'likeBulletin'])->name('bulletins.like');

// Comment Bulletin Route
Route::post('/bulletins/{bulletinID}/comment', [BulletinController::class, 'commentBulletin'])->name('bulletins.comment');

// Edit Bulletin Route
Route::get('/bulletins/edit/{bulletin}', [BulletinController::class, 'edit'])->name('bulletins.edit');

// Update Bulletin Route
Route::post('/bulletins/{bulletinID}', [BulletinController::class, 'update'])->name('bulletins.update');

// Delete Bulletin Route
Route::delete('/bulletins/{bulletin}', [BulletinController::class, 'destroy'])->name('bulletins.destroy');

// Like Bulletin Route
Route::post('/bulletins/{bulletinID}/like', [BulletinController::class, 'likeBulletin'])->name('bulletins.like');

// Comment Bulletin Route
Route::post('/bulletins/{bulletinID}/comment', [BulletinController::class, 'commentBulletin'])->name('bulletins.comment');



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

//ROUTE FOR USER/TEACHER (SEE DATA)
Route::get('/activity', [ActivityController::class, 'getData'])->name('activity.getData');

//ROUTE FOR ADMIN (SEE DATA)
Route::get('/activityadmin', [ActivityController::class, 'getDataAdmin'])->name('activity.getDataAdmin');

//ROUTE FOR ADMIN (CREATE DATA)
Route::get('/activity/create', [ActivityController::class, 'create'])->name('activities.create');
Route::post('/activity/store', [ActivityController::class, 'store'])->name('activities.store');

//ROUTE FOR ADMIN (EDIT DATA)
Route::get('/activity/edit/{activity}', [ActivityController::class, 'edit'])->name('activity.edit');
Route::put('/activity/update/{activity}', [ActivityController::class, 'update'])->name('activity.update');

//ROUTE FOR ADMIN (DELETE DATA)
Route::delete('/activity/{activity}', [ActivityController::class, 'destroy'])->name('activity.destroy');

//ROUTE FOR ADMIN (SEACRH DATA)
Route::get('/searchAdmin', [ActivityController::class, 'adminsearch'])->name('admin.search');

//ROUTE FOR USER (SEACRH DATA)
Route::get('/searchUser', [ActivityController::class, 'usersearch'])->name('user.search');


Route::middleware('auth')->group(function () {
    Route::get('/ManageStudentResult', [StudentResultController::class, 'searchExamList'])->name('ManageStudentResult.searchExamList'); //nama method dkt controller
    
});




require __DIR__.'/auth.php';
