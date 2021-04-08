<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;

use App\Http\Controllers\StudentContoller;

use App\Http\Controllers\BusContoller;

use App\Http\Controllers\BookController;
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

Route::get('/bus',[BusContoller::class,'create']);

Route::get('/student',[StudentContoller::class,'create']);

Route::get('/',[FacultyController::class,'create']);

Route::post('/facultyread',[FacultyController::class,'store']);

Route::post('/studentread',[StudentContoller::class,'store']);

Route::post('/busread',[BusContoller::class,'store']);

Route::get('/books',[BookController::class,'create']);

Route::post('/booksread',[BookController::class,'store']);