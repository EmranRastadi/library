<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
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

Route::group(['namespace' => 'User' , 'prefix' => 'user'], function () {
    Route::get('/', function () {
        return view('panel/index');
    });
    Route::get('/add-book', function () {
        return view('panel/addBook');
    })->name('addBook');
    Route::get('/add-auther', function () {
        return view('panel/addAuther');
    });
    Route::get("/login", [AuthController::class, 'login'])->name('login');
    Route::post("/register", [AuthController::class, 'register'])->name('register');
});
