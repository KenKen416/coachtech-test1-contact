<?php

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

Route::post('/register',[RegisterController::class,'store']);
Route::get('/register',[RegisterController::class,'register']);

Route::get('/thanks',function(){
    return view('thanks');
});
Route::get('/',function(){
    return view('contact');
});