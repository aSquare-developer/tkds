<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HallBookingController;

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

Route::get('/hall-booking', [HallBookingController::class, 'index'])->name('hall-booking');

Route::post('/register-for-lessons', [MainController::class, 'registerForLessons']);

Route::post('/contact-us', [ContactUsController::class, 'sendMessage']);
