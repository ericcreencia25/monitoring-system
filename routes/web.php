<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\NovController;
use App\Http\Controllers\ShapefilesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

// Login
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Dashboard
Route::post('/establishment/all', [DashboardController::class, 'establishmentAll'])->name('establishmentAll');
Route::post('/establishment/details', [DashboardController::class, 'establishmentDetails'])->name('establishmentDetails');
Route::get('company-registry', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/favorite/saved', [DashboardController::class, 'favoriteAdd'])->name('favoriteAdd');
Route::post('/favorite/saved', [DashboardController::class, 'favoriteAdd'])->name('favoriteAdd');
Route::post('/find-smr', [DashboardController::class, 'findSMR'])->name('/find-smr');


// Report
Route::get('report', [ReportController::class, 'index'])->middleware('auth'); 
Route::get('generate/report', [ReportController::class, 'index'])->middleware('auth'); 
Route::post('/ecc-conditionalities', [ReportController::class, 'eccConditionalitites'])->name('eccConditionalitites');
Route::get('report-list', [ReportController::class, 'reportList'])->middleware('auth'); 
Route::post('/save-raw', [ReportController::class, 'saveRaw'])->name('saveRaw');
Route::post('getReportList', [ReportController::class, 'getReportList'])->name('getReportList');
Route::post('getReportData', [ReportController::class, 'getReportData'])->name('getReportData');
Route::post('/save-final-step', [ReportController::class, 'saveFinalStep'])->name('saveFinalStep');
Route::get('/preview-inspection-report/{id}', [ReportController::class, 'previewInspectionReport'])->name('previewInspectionReport');
Route::post('/get-report/id', [ReportController::class, 'getReportbyID'])->name('/get-report/id');
Route::post('linkToReport', [ReportController::class, 'linkToReport'])->name('linkToReport');
Route::post('/save-per-page', [ReportController::class, 'SavePerPage'])->name('/save-per-page');
Route::post('/delete-report', [ReportController::class, 'deleteReport'])->name('/delete-report');
Route::post('/upload/file', [ReportController::class, 'uploadfile'])->name('/upload/file');
Route::post('/upload/file/investigation', [ReportController::class, 'uploadFileInvestigation'])->name('/upload/file/investigation');

Route::post('/get/file', [ReportController::class, 'getfile'])->name('/get/file');
Route::post('/get/file/investigation', [ReportController::class, 'getFileInvestigation'])->name('/get/file/investigation');

Route::post('/save-investigation-report', [ReportController::class, 'saveInvestigation'])->name('/save-investigation-report');
Route::post('/get-investigation-report', [ReportController::class, 'getInvestigation'])->name('/get-investigation-report');

Route::post('/delete-investigation-picture', [ReportController::class, 'deleteInvestigationPicture'])->name('/delete-investigation-picture');

Route::post('/nov-list-select', [ReportController::class, 'novListSelect'])->name('/nov-list-select');


// NOV
Route::get('/preview-nov-pdf/{id}', [ReportController::class, 'previewNOVpdf'])->name('previewNOVpdf');
Route::get('nov', [NovController::class, 'index'])->middleware('auth');
Route::post('submitNOV', [NovController::class, 'submitNOV'])->name('submitNOV');
Route::post('getNOVList', [NovController::class, 'getNOVList'])->name('getNOVList');
Route::post('getNOVListbyEMBID', [NovController::class, 'getNOVListbyEMBID'])->name('getNOVListbyEMBID');
Route::post('getNOVview', [NovController::class, 'getNOVview'])->name('getNOVview');
Route::get('nov-list', [NovController::class, 'novList'])->middleware('auth');
Route::get('/preview-nov/{id}', [NovController::class, 'previewNOV'])->name('previewNOV');
Route::post('addProhibitedActs', [NovController::class, 'addProhibitedActs'])->name('addProhibitedActs');
Route::post('getProhibitedActs', [NovController::class, 'getProhibitedActs'])->name('getProhibitedActs');
Route::post('/get-nov/id', [NovController::class, 'getNOVbyID'])->name('/get-nov/id');
Route::post('link-nov-reports', [NovController::class, 'saveLinkFromNOVToReports'])->name('link-nov-reports');
Route::post('/delete-nov', [NovController::class, 'deleteNOV'])->name('/delete-nov');
Route::post('/nov-list-dropdown', [NovController::class, 'novListDropdown'])->name('/nov-list-dropdown');

// Shapefiles
Route::get('shapefiles/{ID}', [ShapefilesController::class, 'index'])->middleware('auth');
Route::post('getimages', [ShapefilesController::class, 'getImages'])->name('getImages');
Route::post('image/delete', [ShapefilesController::class, 'destroy'])->name('destroy');
Route::post('image/upload', [ShapefilesController::class, 'store'])->name('store');
Route::get('shapefilestest', [ShapefilesController::class, 'shapefilestest'])->middleware('auth');

// bookmark
Route::get('bookmark', [DashboardController::class, 'bookmark'])->middleware('auth');
Route::post('bookmarkGet', [DashboardController::class, 'bookmarkGet'])->name('bookmarkGet');