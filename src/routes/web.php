<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'register']);

Route::get('/', [ContactController::class, 'index']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::post('/', [ContactController::class, 'confirm']);
Route::post('/create', [ContactController::class, 'create']);

Route::get('/admin', [AdminController::class, 'index']);
Route::delete('/admin/delete', [AdminController::class, 'destroy']);
Route::get('/admin/export', [AdminController::class, 'export']);
