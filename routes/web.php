<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Dashboard\DancestyleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\TaskListController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\Dashboard\TimetableController;
use App\Http\Controllers\Dashboard\TrialLessonController;
use App\Http\Controllers\Dashboard\PriceListController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\HallBookingController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\RentPageController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/rent', [HallBookingController::class, 'index'])->name('hall-booking');
Route::get('/hinnakiri', [PriceController::class, 'index'])->name('price-list');

Route::get('/register-for-lessons', [MainController::class, 'registerForLessonsPage'])->name('registerForLessonsPage');
Route::post('/register-for-lessons', [MainController::class, 'registerForLessons']);
Route::get('/register-for-trial-training', [MainController::class, 'registerForTrialTrainingPage'])->name('registerForTrialTrainingPage');
Route::post('/register-for-trial-training', [MainController::class, 'registerForTrialTraining']);

Route::post('/contact-us', [ContactUsController::class, 'sendMessage']);


Route::get('/sign-up', [RegisterController::class, 'show'])->name('sign-up-page'); // Register page
Route::post('/store-new-user', [RegisterController::class, 'register'])->name('store-new-user');

Route::get('/sign-in', [LoginController::class, 'show'])->name('sign-in-page'); // Login page
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

// Dashboard Section
Route::middleware(['auth'])->group(function () {
  // Dashboard Routes
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');

  // Dashboard Task Section
  Route::get('/dashboard/tasks', [TaskListController::class, 'index'])->name('dashboard-tasks');
  Route::get('/dashboard/tasks/completed', [TaskListController::class, 'completed'])->name('dashboard-tasks-completed');
  Route::get('/dashboard/task/create', [TaskListController::class, 'create'])->name('dashboard-task-create');
  Route::post('/dashboard/task/store', [TaskListController::class, 'store'])->name('dashboard-task-store');
  Route::get('/dashboard/task/{id}', [TaskListController::class, 'show'])->name('dashboard-task-show');
  Route::post('/dashboard/task/{id}/change-status', [TaskListController::class, 'changeStatus'])->name('dashboard-task-change-status');
  Route::get('/dashboard/task/{id}/edit', [TaskListController::class, 'edit'])->name('dashboard-task-edit');
  Route::post('/dashboard/task/{id}/update', [TaskListController::class, 'update'])->name('dashboard-task-update');
  Route::get('/dashboard/task/{id}/delete', [TaskListController::class, 'delete'])->name('dashboard-task-delete');

  // Dashboard Request Section
  Route::get('dashboard/requests', [RequestController::class, 'index'])->name('dashboard-request');
  Route::get('dashboard/requests/create', [RequestController::class, 'create'])->name('dashboard-request-create');
  Route::get('dashboard/requests/completed', [RequestController::class, 'completed'])->name('dashboard-request-completed');
  Route::get('dashboard/requests/{id}', [RequestController::class, 'show'])->name('dashboard-request-show');
  Route::get('dashboard/requests/delete/{id}', [RequestController::class, 'destroy'])->name('dashboard-request-destroy');
  Route::get('dashboard/requests/{id}/sendContract/{fileId}', [RequestController::class, 'sendContract'])->name('dashboard-request-sendContract');

  // Dashboard Main page section
  Route::get('/dashboard/header', [HeaderController::class, 'index'])->name('dashboard-header');
  Route::post('/dashboard/header/store', [HeaderController::class, 'store'])->name('dashboard-header-store');

  // Dashboard Dancestyle section
  Route::get('/dashboard/dancestyle', [DancestyleController::class, 'index'])->name('dashboard-dancestyle');
  Route::get('/dashboard/dancestyle/create', [DancestyleController::class, 'create'])->name('dashboard-dancestyle-create');
  Route::post('/dashboard/dancestyle/store', [DancestyleController::class, 'store'])->name('dashboard-dancestyle-store');
  Route::get('/dashboard/dancestyle/{id}/edit', [DancestyleController::class, 'edit'])->name('dashboard-dancestyle-edit');
  Route::post('/dashboard/dancestyle/{id}/update', [DancestyleController::class, 'update'])->name('dashboard-dancestyle-update');
  Route::get('/dashboard/dancestyle/{id}/delete', [DancestyleController::class, 'delete'])->name('dashboard-dancestyle-delete');

  // Dashboard Rent page Section
  Route::get('/dashboard/rent', [RentPageController::class, 'index'])->name('dashboard-rent');
  Route::post('/dashboard/rent/store', [RentPageController::class, 'store'])->name('dashboard-rent-store');

  // Dashboard Timetable page Section
  Route::get('/dashboard/timetable', [TimetableController::class, 'index'])->name('dashboard-timetable');
  Route::get('/dashboard/timetable/create', [TimetableController::class, 'create'])->name('dashboard-timetable-create');
  Route::post('/dashboard/timetable/store', [TimetableController::class, 'store'])->name('dashboard-timetable-store');
  Route::get('/dashboard/timetable/{id}/edit', [TimetableController::class, 'edit'])->name('dashboard-timetable-edit');
  Route::post('/dashboard/timetable/{id}/update', [TimetableController::class, 'update'])->name('dashboard-timetable-update');
  Route::get('/dashboard/timetable/{id}/delete', [TimetableController::class, 'delete'])->name('dashboard-timetable-delete');

    // Dashboard Teacher page Section
    Route::get('/dashboard/teachers', [TeacherController::class, 'index'])->name('dashboard-teachers');
    Route::get('/dashboard/teachers/create', [TeacherController::class, 'create'])->name('dashboard-teachers-create');
    Route::post('/dashboard/teachers/store', [TeacherController::class, 'store'])->name('dashboard-teachers-store');
    Route::get('/dashboard/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('dashboard.teachers.edit');
    Route::post('/dashboard/teachers/{id}/update', [TeacherController::class, 'update'])->name('dashboard.teachers.update');
    Route::delete('/dashboard/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('dashboard.teachers.destroy');

    // Dashboard Trial Lessons Section
    Route::get('/dashboard/trial-lessons', [TrialLessonController::class, 'index'])->name('dashboard.trial.lessons');
    Route::get('/dashboard/trial-lessons/completed', [TrialLessonController::class, 'completed'])->name('dashboard.trial.lessons.completed');
    Route::get('/dashboard/trial-lessons/{id}', [TrialLessonController::class, 'show'])->name('dashboard.trial.lessons.show');
    Route::post('/dashboard/trial-lessons/{id}/change-status', [TrialLessonController::class, 'changeStatus'])->name('dashboard.trial.lessons.change.status');
    Route::delete('/dashboard/trial-lessons/{id}', [TrialLessonController::class, 'destroy'])->name('dashboard.trial.lessons.destroy');

    // Dashboard Price List Section
    Route::get('/dashboard/pricelist', [PriceListController::class, 'index'])->name('dashboard.priselist.index');
    Route::get('/dashboard/pricelist/create', [PriceListController::class, 'create'])->name('dashboard.priselist.create');
    Route::post('/dashboard/pricelist/store', [PriceListController::class, 'store'])->name('dashboard.priselist.store');
    Route::get('/dashboard/pricelist/{offer}/edit', [PriceListController::class, 'edit'])->name('dashboard.priselist.edit');
    Route::patch('/dashboard/pricelist/{offer}/update', [PriceListController::class, 'update'])->name('dashboard.priselist.update');
    Route::delete('/dashboard/pricelist/{service}', [PriceListController::class, 'destroy'])->name('dashboard.priselist.delete');

    // Dashboard Settings Page Section
    Route::get('/dashboard/settings', [SettingsController::class, 'index'])->name('dashboard.settings.index');
    Route::post('/dashboard/settings/{settings}/update', [SettingsController::class, 'update'])->name('dashboard.settings.update');
});
