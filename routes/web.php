<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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

Route::get('/get-classes/{yearId}', [ReportController::class, 'getClassesByYear'])->name('get-classes');
Route::get('/get-students/{classId}', [ReportController::class, 'getStudentsByClass'])->name('get-students');
Route::match(['get', 'post'], '/student-academic-report', [ReportController::class, 'showStudentAcademicReport'])->name('student-academic-report');
Route::match(['get', 'post'], '/class-academic-report', [ReportController::class, 'showClassAcademicReport'])->name('class-academic-report');
Route::get('/year-academic-report', [ReportController::class, 'getYearAcademicReport'])->name('year-academic-report-get');
Route::post('/year-academic-report', [ReportController::class, 'showYearAcademicReport'])->name('year-academic-report');
Route::get('/activity-reports', [ReportController::class, 'getActivityReports'])->name('activity-reports');
Route::get('/activity-reports/{id}', [ReportController::class, 'getActivityReportForm'])->name('activity-report-form');
Route::post('/activity-reports/{id}', [ReportController::class, 'saveActivityReport'])->name('save-activity-report');

require __DIR__.'/auth.php';
