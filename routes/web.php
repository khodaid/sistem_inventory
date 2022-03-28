<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
// Route::post('login', 'AuthController@login')->name('auth.login');
Route::get('/log', function () {
    return view('layout.admin.dashboard');
})->name('log');

// layout admin
// Route::get('/dashboard', function () {
//     return view('layout.admin.dashboard');
// })->name('admin.index');
