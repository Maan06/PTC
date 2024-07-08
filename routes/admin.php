<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\AdminJobPostContoller;
use App\Http\Controllers\Admin\AppliedCandidateController;
// use App\Http\Controllers\Admin\NotificationController;
// use App\Http\Controllers\Admin\SettingController;

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

//Auth Routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('/');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

//Profile & Password Route
Route::post('/password/update', [HomeController::class, 'password_update'])->name('admin.password.update');

//User Route
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('admin.contact_us');
Route::get('/contact-us/data', [ContactUsController::class, 'data'])->name('admin.contact_us.data');
Route::post('/users/status', [ContactUsController::class, 'status'])->name('admin.users.status');


//Notification Route
// Route::get('/notifications', [NotificationController::class, 'index'])->name('admin.notifications');
// Route::get('/notifications/data', [NotificationController::class, 'data'])->name('admin.notifications.data');
// Route::post('/notifications', [NotificationController::class, 'store'])->name('admin.notifications.store');

// //Setting Route
// Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings');
// Route::get('/settings/data', [SettingController::class, 'data'])->name('admin.settings.data');
// Route::post('/settings/update', [SettingController::class, 'update'])->name('admin.settings.update');

//Applied candidates Route
Route::get('/applied-candidates', [AppliedCandidateController::class, 'index'])->name('admin.applied_candidates');
Route::get('/get-applied-candidate-data', [AppliedCandidateController::class, 'data'])->name('admin.applied.jobs.data');
Route::post('/applied-candidate-status-change', [AppliedCandidateController::class, 'status'])->name('admin.applied-candidate.status');

//Job Post Route
Route::get('/add-job-post', [AdminJobPostContoller::class, 'index'])->name('admin.postjob');
Route::post('/save-job-post', [AdminJobPostContoller::class, 'save'])->name('admin.save.job_post');
Route::get('/get-job-data', [AdminJobPostContoller::class, 'data'])->name('admin.jobs.data');
Route::get('/get-data', [AdminJobPostContoller::class, 'getData'])->name('admin.job.getData');
Route::post('/job-status-change', [AdminJobPostContoller::class, 'status'])->name('admin.job.status');


