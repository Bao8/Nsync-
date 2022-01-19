<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentsController;
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

//リスト表示
// /homeにアクセスしたら-[ContentsController]を使用して-「home」クラスを実行する
Route::get('home',[ContentsController::class,'home'])->name('home');

//登録画面
Route::get("create_contents",[ContentsController::class,'create'])->name('create');

//登録作業
Route::post("store",[ContentsController::class,'exeStore'])->name('store');

//編集画面
// Route::get("contents/edit/{id}",[ContentsController::class,'edit'])->name('edit');

//更新作業
Route::post("update",[ContentsController::class,'update'])->name('update');


//コンテンツページ詳細表示
// /各IDのコンテンツページにアクセスしたら-[ContentsController]を使用して-「contents」クラスを実行する
Route::get("contents/{id}",[ContentsController::class,'contents'])->name('contents');

Route::post('/upload', [UploadController::class, 'store']);
Route::post('/contents', [Material_UploadController::class, 'store']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
// Route::get('/contents', [App\Http\Controllers\HomeController::class, 'contents'])->name('contents');
// Route::get('/meta', [App\Http\Controllers\HomeController::class, 'meta'])->name('meta');
// Route::get('/restore', [App\Http\Controllers\HomeController::class, 'restore'])->name('restore');
// Route::get('/others', [App\Http\Controllers\HomeController::class, 'others'])->name('others');

// Route::get('/', [HomeController::class, 'home']);
// Route::get('/home', [HomeController::class, 'home']);
// Route::get('/contents', [HomeController::class, 'contents']);
Route::get('/meta', [HomeController::class, 'meta']);
Route::get('/restore', [HomeController::class, 'restore']);
Route::get('/others', [HomeController::class, 'others']);