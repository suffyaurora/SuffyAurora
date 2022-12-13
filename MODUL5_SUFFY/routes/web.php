<?php

use App\Http\Controllers\ShowroomController;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrasi', function () {
    return view('showroom/registrasi');
});
Route::get('/login', function () {
    return view('showroom/login');
});
Route::get('/form', function () {
    return view('showroom/form');
});
Route::get('/showroom', function () {
    return view('showroom');
});
Route::resource('showroom', ShowroomController::class);

Route::get('/showroom', 'App\Http\Controllers\ShowroomController@create');
Route::post('/showroom','App\Http\Controllers\ShowroomController@store');