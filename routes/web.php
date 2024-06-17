<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return 'Cache Cleared'; //Return anything
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return 'DONE'; //Return anything
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/submit_contact_us', [HomeController::class, 'submit_contact_us'])->name('submit_contact_us');
Route::post('/job-apply', [HomeController::class, 'job_apply'])->name('job_apply');