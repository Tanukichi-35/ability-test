<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [
    ContactController::class, 'index'
]);

Route::get('/confirm', [
    ContactController::class, 'confirm'
]);

Route::post('/store', [
    ContactController::class, 'store'
]);

Route::delete('/delete', [
    ContactController::class, 'delete'
]);

// Route::get('/thanks', function () {
//     return view('thanks');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::post('/register', [
//     UserController::class, 'register'
// ]);

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin']);
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/search', [
    ContactController::class, 'search'
]);

Route::get('/reset', [
    ContactController::class, 'reset'
]);