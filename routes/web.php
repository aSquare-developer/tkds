<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HallBookingController;
use App\Http\Controllers\PriceListController;

use App\Http\Controllers\DashboardController;


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/rent', [HallBookingController::class, 'index'])->name('hall-booking');
Route::get('/hinnakiri', [PriceListController::class, 'index'])->name('price-list');

Route::post('/register-for-lessons', [MainController::class, 'registerForLessons']);

Route::post('/contact-us', [ContactUsController::class, 'sendMessage']);


Route::get('/sign-up', [RegisterController::class, 'show'])->name('sign-up-page'); // Register page
Route::post('/store-new-user', [RegisterController::class, 'register'])->name('store-new-user');

Route::get('/sign-in', [LoginController::class, 'show'])->name('sign-in-page'); // Login page
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');
