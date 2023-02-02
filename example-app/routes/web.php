<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
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
Route::view('calendar','calendar');
Route::post('/calendar', [CalendarController::class, 'store'])->name('calendar.store');
Route::get('/','App\Http\Controllers\RestoController@index');
Route::view('register', 'register');
Route::post('register','App\Http\Controllers\RestoController@register');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::view('login', 'login');
Route::post('login','App\Http\Controllers\CalendarController@login');
Route::view('appoint','appoint');
Route::post('appoint','App\Http\Controllers\CalendarController@viewappoint');


