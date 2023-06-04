<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::controller(App\Http\Controllers\FrontendController::class)->name('frontend.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/job-listing', 'job_listing')->name('job_listing');
    Route::get('/job-detail/{id}', 'job_detail')->name('job_detail');
    Route::get('/category/{id}', 'category')->name('category');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');

    Route::middleware(['auth'])->group(function () {
        Route::post('/job-post', 'jobPost')->name('jobPost');
    });
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => true,
    'reset'    => true,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
//     Route::controller(App\Http\Controllers\FrontendController::class)->prefix('frontend')->name('frontend.')->group(function() {
//         Route::resource('produk', App\Http\Controllers\Admin\ProductController::class);
//     });
// });
