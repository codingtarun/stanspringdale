<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/menu', [IndexController::class, 'index'])->name('menu');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Menu Category & Menu Item Routes
 */

Route::resource('category', CategoryController::class);
Route::resource('menu', MenuController::class);

/**
 * Users & Profile Controller 
 */
Route::resource('user', UserController::class);
Route::resource('profile', ProfileController::class);

/**
 * Order Controller
 */
Route::resource('order', OrderController::class);
