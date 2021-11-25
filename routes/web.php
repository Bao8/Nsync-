<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

Route::get('/dashboad_others', function () {
    return view('dashboad_others');
});

Route::get('/dashboad_home', function () {
    return view('dashboad_home');
});

Route::get('/dashboad_meta', function () {
    return view('dashboad_meta');
});

Route::get('/dashboad_restore', function () {
    return view('dashboad_restore');
});

Route::get('/dashboad_sozai', function () {
    return view('dashboad_sozai');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/Nsync_layout', function () {
    return view('Nsync_layout');
});

Route::post('/upload', [UploadController::class, 'store']);