<?php

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
})->name('my_home');

Route::post('/login', function () {
    return view('login');
})->name('login.view');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
