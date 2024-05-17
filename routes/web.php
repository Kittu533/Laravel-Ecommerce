<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

// LOGIN LOGOUT
Route::post('/login', [AuthController::class,'auth'])->name('login-post');

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/', function () {
    return view('login');
})->name('login');

// END LOGIN

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::resource('product',ProductController::class);
Route::get('/dataTable', function () {
    return view('admin.dataTable');
});


Route::get('/dataTable', function (){
    return view('admin.dataTable');
});