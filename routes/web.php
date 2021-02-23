<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{index}', [StudentController::class, 'get_name']);

Route::get('/date_of_birth/{date}', [StudentController::class, 'get_birthday']);

Route::get('age/{age}', [StudentController::class, 'get_age']);