<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('fromlogin', [AuthController::class, 'showFormLogin'])->name('auth');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register_simpan');

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('transaction', [TransactionController::class, 'transaction'])->name('transaction');
    Route::get('transactionform', [TransactionController::class, 'transactionform'])->name('transaction_layout');
    Route::get('logout', [HomeController::class, 'logout']);
});
