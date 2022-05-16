<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerjalananController;
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



Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

// Route::get('/', function () {
//     return view('pages.auth.login');
// });
// Auth::routes();

// Route::get('/register', function () {
//     return view('pages.auth.register');
// });

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/catatanPerjalanan', [App\Http\Controllers\PerjalananController::class,'catatanPerjalanan']);

Route::get('/register', [App\Http\Controllers\RegisterController::class,'register'])->name('register');
Route::post('/simpanRegister', [App\Http\Controllers\RegisterController::class,'simpanRegister'])->name('simpanRegister');

Route::get('/', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index']);
    Route::get('/cari',[App\Http\Controllers\PerjalananController::class,'cariPerjalanan']);
    Route::get('/member',[App\Http\Controllers\MemberController::class,'index']);
});

Route::get('/inputPerjalanan', function () {
    return view('pages.inputData');
});
Route::post('/simpanPerjalanan', [App\Http\Controllers\PerjalananController::class,'simpanPerjalanan'])->name('inputPerjalanan');

Route::get('/urutkan', [App\Http\Controllers\PerjalananController::class,'urutPerjalanan'])->name('urutPerjalanan');

Route::get('/cari',[App\Http\Controllers\PerjalananController::class,'cariPerjalanan']);

Route::get('/editData', [App\Http\Controllers\PerjalananController::class,'edit'])->name('editData');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
