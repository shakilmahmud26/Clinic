<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\IDScannerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhysicianController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Login Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Dashboard Route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Laboratory Route
Route::prefix('laboratory')->group(function () {
    // Report Route
    Route::prefix('report')->group(function () {
        Route::get('/accession', [ReportController::class, 'accession'])->name('report.accession');
        Route::get('/daily-worksheet', [ReportController::class, 'dailyWorksheet'])->name('report.daily-worksheet');
        Route::get('/result-viewer', [ReportController::class, 'resultViewer'])->name('report.result-viewer');
        Route::get('/test-list', [ReportController::class, 'testList'])->name('report.test-list');
        Route::post('/test-store', [ReportController::class, 'testStore'])->name('report.test-store');
        Route::get('/test-edit/{id}', [ReportController::class, 'testEdit'])->name('report.test-edit');
        Route::post('/test-update', [ReportController::class, 'testUpdate'])->name('report.test-update');
        Route::post('/test-delete', [ReportController::class, 'testDelete'])->name('report.test-delete');
    });

    // Log Route
    Route::prefix('log')->group(function () {
        Route::get('/control', [ReportController::class, 'controlLog'])->name('log.control');
        Route::post('/control-store', [ReportController::class, 'controlStore'])->name('log.control.store');
        Route::get('/control-edit/{id}', [ReportController::class, 'controlEdit'])->name('log.control.edit');
        Route::post('/control-update', [ReportController::class, 'controlUpdate'])->name('log.control.update');
        Route::post('/control-delete', [ReportController::class, 'controlDelete'])->name('log.control.delete');
        Route::get('/reagent', [ReportController::class, 'reagentLog'])->name('log.reagent');
        Route::post('/reagent-store', [ReportController::class, 'reagentStore'])->name('log.reagent.store');
        Route::get('/reagent-edit/{id}', [ReportController::class, 'reagentEdit'])->name('log.reagent.edit');
        Route::post('/reagent-update', [ReportController::class, 'reagentUpdate'])->name('log.reagent.update');
        Route::post('/reagent-delete', [ReportController::class, 'reagentDelete'])->name('log.reagent.delete');
    });

    // QC Route
    Route::prefix('qc')->group(function () {
        Route::get('/daily', [ReportController::class, 'dailyQc'])->name('qc.daily');
        Route::post('/store', [ReportController::class, 'qcStore'])->name('qc.store');
        Route::get('/edit/{id}', [ReportController::class, 'qcEdit'])->name('qc.edit');
        Route::post('/update', [ReportController::class, 'qcUpdate'])->name('qc.update');
        Route::post('/delete', [ReportController::class, 'qcDelete'])->name('qc.delete');
        Route::get('/auto-analysis', [ReportController::class, 'qcAutoAnalysis'])->name('qc.auto-analysis');
    });

    Route::get('/profile-setup', [OtherController::class, 'profileSetup'])->name('profile-setup');
    Route::post('/profile-store', [OtherController::class, 'profileStore'])->name('profile-store');
    Route::get('/profile-edit/{id}', [OtherController::class, 'profileEdit'])->name('profile-edit');
    Route::post('/profile-update', [OtherController::class, 'profileUpdate'])->name('profile-update');
    Route::post('/profile-delete', [OtherController::class, 'profileDelete'])->name('profile-delete');
    Route::get('/levey-jennings', [OtherController::class, 'leveyJennings'])->name('levey-jennings');
});

// Administration Route
Route::prefix('administration')->group(function () {
    // Patient Route
    Route::prefix('patient')->group(function () {
        Route::get('/add', [PatientController::class, 'add'])->name('patient.add');
        Route::get('/delete', [PatientController::class, 'delete'])->name('patient.delete');
        Route::post('/update', [PatientController::class, 'update'])->name('patient.update');
        Route::get('/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
        Route::get('/list', [PatientController::class, 'list'])->name('patient.list');
        Route::get('/view/{id}', [PatientController::class, 'view'])->name('patient.view');
        Route::get('/search', [PatientController::class, 'search'])->name('patient.search');
    });
    // Report Route
    Route::prefix('report')->group(function () {
        Route::get('/billing', [ReportController::class, 'billing'])->name('report.billing');
        Route::get('/production', [ReportController::class, 'production'])->name('report.production');
    });

    // ID Scanner Route
    Route::prefix('id-scanner')->group(function () {
        Route::get('/scan', [IDScannerController::class, 'add'])->name('id-scanner');
    });

    // Draw Route
    Route::prefix('draw')->group(function () {
        Route::get('/add', [DrawController::class, 'add'])->name('draw.add');
        Route::get('/master', [DrawController::class, 'master'])->name('draw.master');
        Route::get('/phlebotomist', [DrawController::class, 'phlebotomist'])->name('draw.phlebotomist');
    });

    // Booking Route
    Route::prefix('booking')->group(function () {
        Route::get('/add', [BookingController::class, 'add'])->name('booking.add');
        Route::get('/delete', [BookingController::class, 'delete'])->name('booking.delete');
        Route::post('/update', [BookingController::class, 'update'])->name('booking.update');
        Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('booking.edit');
        Route::get('/list', [BookingController::class, 'list'])->name('booking.list');
    });

    // Physician Route
    Route::prefix('physician')->group(function () {
        Route::get('/add', [PhysicianController::class, 'add'])->name('physician.add');
        Route::post('/store', [PhysicianController::class, 'store'])->name('physician.store');
        Route::post('/delete', [PhysicianController::class, 'delete'])->name('physician.delete');
        Route::post('/update', [PhysicianController::class, 'update'])->name('physician.update');
        Route::get('/edit/{id}', [PhysicianController::class, 'edit'])->name('physician.edit');
        Route::get('/list', [PhysicianController::class, 'list'])->name('physician.list');
        Route::get('/search', [PhysicianController::class, 'search'])->name('physician.search');
    });

    // Covid Route
    Route::prefix('covid')->group(function () {
        Route::get('/add', [CovidController::class, 'add'])->name('covid.add');
        Route::get('/delete', [CovidController::class, 'delete'])->name('covid.delete');
        Route::post('/update', [CovidController::class, 'update'])->name('covid.update');
        Route::get('/edit/{id}', [CovidController::class, 'edit'])->name('covid.edit');
        Route::get('/test', [CovidController::class, 'test'])->name('covid.test');
        Route::get('/claim', [CovidController::class, 'claim'])->name('covid.claim');
        Route::get('/list', [CovidController::class, 'list'])->name('covid.list');
    });
});