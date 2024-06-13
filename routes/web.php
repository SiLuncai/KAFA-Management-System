<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\StudentResultController;
use App\Http\Controllers\KAFABulletinController;
use App\Http\Controllers\ReportController;

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
Route::get('/bulletins', [KAFABulletinController::class, 'index'])->name('bulletins.index');

// Create Route
Route::get('/bulletins/create', [KAFABulletinController::class, 'create'])->name('bulletins.create');

// Store Route
Route::post('/bulletins', [KAFABulletinController::class, 'store'])->name('bulletins.store');

// Show Route
Route::get('/bulletins/show', [KAFABulletinController::class, 'show'])->name('bulletins.show');

// Like Bulletin Route
Route::post('/bulletins/{bulletinID}/like', [KAFABulletinController::class, 'likeBulletin'])->name('bulletins.like');

// Comment Bulletin Route
Route::post('/bulletins/{bulletinID}/comment', [KAFABulletinController::class, 'commentBulletin'])->name('bulletins.comment');

// Edit Bulletin Route
Route::get('/bulletins/edit/{bulletin}', [KAFABulletinController::class, 'edit'])->name('bulletins.edit');

// Update Bulletin Route
Route::post('/bulletins/{bulletinID}', [KAFABulletinController::class, 'update'])->name('bulletins.update');

// Delete Bulletin Route
Route::delete('/bulletins/{bulletin}', [KAFABulletinController::class, 'destroy'])->name('bulletins.destroy');

// Like Bulletin Route
Route::post('/bulletins/{bulletinID}/like', [KAFABulletinController::class, 'likeBulletin'])->name('bulletins.like');

// Comment Bulletin Route
Route::post('/bulletins/{bulletinID}/comment', [KAFABulletinController::class, 'commentBulletin'])->name('bulletins.comment');


Route::get('/StudentAcademicReport', function () {
    return view('manage-report.StudentAcademicReport');
});

Route::get('/ClassAcademicReport', function () {
    return view('manage-report.ClassAcademicReport');
});

Route::get('/YearAcademicReport', function () {
    return view('manage-report.YearAcademicReport');
});

Route::get('/ActivityReportList', [ReportController::class, 'index']);

Route::get('/ActivityReport', function () {
    return view('manage-report.ActivityReport');
});

Route::get('/ActivityReportForm', function () {
    return view('manage-report.ActivityReportForm');
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
    Route::get('/ManageStudentResult', [StudentResultController::class, 'navigatetoExamList'])->name('ManageStudentResult.navigatetoExamList'); //nama method dkt controller
    Route::get('/ManageStudentResult/insertExamResult', [StudentResultController::class, 'insertExamResult'])->name('ManageStudentResult.StudentList');
   
});

Route::get('/ManageStudentResult', [StudentResultController::class, 'searchExamList'])->name('ManageStudentResult.searchExamList'); //nama method dkt controller

Route::get('/CheckSlip', function () {
    return view('ManageStudentResult.CheckSlip');
})->name('checkSlip');

Route::get('/StudentList', function () {
    return view('ManageStudentResult.StudentList');
});

Route::get('/ChooseExam', function () {
    return view('ManageStudentResult.ChooseExam');
})->name('chooseExam');

Route::get('/ExamSlip', function () {
    return view('ManageStudentResult.ExamSlip');
})->name('examSlip');

Route::get('/example', function () {
    return view('ManageStudentResult.example');
});

Route::get('/StudentAcademicReport', [ReportController::class, 'showStudentAcademicReport'])->name('student-academic-report');

Route::post('/StudentAcademicReport', [ReportController::class, 'showStudentAcademicReport']);

Route::get('/ClassAcademicReport', [ReportController::class, 'showClassAcademicReport'])->name('class-academic-report');

Route::post('/ClassAcademicReport', [ReportController::class, 'showClassAcademicReport']);

Route::get('/YearAcademicReport', [ReportController::class, 'getYearAcademicReport'])->name('year-academic-report');

Route::post('/YearAcademicReport', [ReportController::class, 'showYearAcademicReport']);

Route::get('/ActivityReportList', [ReportController::class, 'showActivityReportList'])->name('activity-report-list');

Route::get('/ActivityReportForm/{activityId}', [ReportController::class, 'showActivityReportForm'])->name('activity-report-form');

Route::post('/ActivityReportForm/{activityId}', [ReportController::class, 'storeActivityReport'])->name('activity-report-store');

Route::get('/ActivityReport/{activityI}', [ReportController::class, 'showActivityReport'])->name('activity-report');

//Route::get('nama page', [App\Http\Controllers\StudentResultController::class, 'function/method']);
Route::get('try', [App\Http\Controllers\StudentResultController::class, 'index'])->name('try.index');
Route::get('try/create', [App\Http\Controllers\StudentResultController::class, 'create'])->name('try.create');
Route::post('try/create', [App\Http\Controllers\StudentResultController::class, 'store']);
Route::get('try/{id}/edit', [App\Http\Controllers\StudentResultController::class, 'edit']);
Route::put('try/{id}/edit', [App\Http\Controllers\StudentResultController::class, 'update']);
Route::get('try/{id}/delete', [App\Http\Controllers\StudentResultController::class, 'destroy']);


require __DIR__.'/auth.php';
