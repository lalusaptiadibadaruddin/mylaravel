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
});

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::get('/', 'LoginController@login')->name('login');
Route::post('loginaksi', 'LoginController@loginaksi')->name('loginaksi');
Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('logoutaksi', 'LoginController@logoutaksi')->name('logoutaksi')->middleware('auth');

Route::get('/register', 'RegisterController@register')->name('register');

//Route::get('register', [RegisterController::class, 'register']);
Route::post('registeraksi', 'RegisterController@registeraksi')->name('registeraksi');

Route::get('/home/tambah','HomeController@tambah');
Route::post('/home/store','HomeController@store');
Route::get('/home/edit/{id}','HomeController@edit');
Route::post('/home/update','HomeController@update');
Route::get('/home/hapus/{id}','HomeController@hapus');
Route::get('/home/cari','HomeController@cari');


