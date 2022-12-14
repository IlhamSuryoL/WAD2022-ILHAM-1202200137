<?php

use App\Http\Controllers\ShowroomController;
use Illuminate\Support\Facades\Route;
use App\Models\Showroom;
use App\Http\Controllers\UserController;

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
    return view('Home-Ilham');
});

Route::get('/login', function () {
    return view('Login-Ilham');
});

Route::get('/regis', function () {
    return view('Registrasi-Ilham');
});

Route::get('/add', function () {
    return view('Add-Ilham');
});


Route::get('my-car', [ShowroomController::class, 'index']);

Route::get('detail/{id}', [ShowroomController::class, 'detail']);

Route::resource('my-car', ShowroomController::class, );

Route::get('detail/{id}', [ShowroomController::class, 'detail']);
Route::get('edit/{id}', [ShowroomController::class, 'edit']);



Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');



