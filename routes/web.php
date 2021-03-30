<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'create'])->name('register');



Route::get('/dashboard',  [DashboardController::class, 'index'])->name('dashboard');
Route::get('/students',  [DashboardController::class, 'students'])->name('students');
Route::get('/courses',  [DashboardController::class, 'courses'])->name('courses');
Route::get('/my-courses',  [DashboardController::class, 'enrolledCourses'])->name('my-courses');
Route::get('/courses/enroll/{course_id}',  [DashboardController::class, 'enroll'])->name('enroll');
