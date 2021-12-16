<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Material_UploadController;

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

// Route::get('/app', function () {
//     return view('app');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/contents', function () {
//     return view('contents');
// });

// Route::get('/others', function () {
//     return view('others');
// });

// Route::get('/meta', function () {
//     return view('meta');
// });

// Route::get('/restore', function () {
//     return view('restore');
// });



Route::post('/upload', [UploadController::class, 'store']);
Route::post('/contents', [Material_UploadController::class, 'store']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
// Route::get('/contents', [App\Http\Controllers\HomeController::class, 'contents'])->name('contents');
// Route::get('/meta', [App\Http\Controllers\HomeController::class, 'meta'])->name('meta');
// Route::get('/restore', [App\Http\Controllers\HomeController::class, 'restore'])->name('restore');
// Route::get('/others', [App\Http\Controllers\HomeController::class, 'others'])->name('others');

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/contents', [HomeController::class, 'contents']);
Route::get('/meta', [HomeController::class, 'meta']);
Route::get('/restore', [HomeController::class, 'restore']);
Route::get('/others', [HomeController::class, 'others']);