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

//Halaman Home
Route::get('/','HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('about');

//Halaman Input Biodata
Route::get('/biodata','BiodataController@index')->name('biodata');
Route::post('/biodata/store','BiodataController@store')->name('storebiodata');

//Halaman Login
Route::get('/login','LoginController@login')->name('login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/logout', 'UserController@logout');

//Halaman Register
Route::get('/register','LoginController@register')->name('register');
Route::post('/registerPost', 'UserController@registerPost');

// Halaman Admin
Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('/rekapbiodata','AdminController@rekapbiodata')->name('rekapbiodata');
Route::get('/rekaphasiltest','AdminController@rekaphasil')->name('rekaphasil');
Route::get('/rekapsoaltest','AdminController@rekapsoal')->name('rekapsoal');
Route::get('/tambahsoal','AdminController@tambahsoal')->name('tambahsoal');

//Halaman Unduh
Route::get('/unduh','UnduhController@unduh')->name('unduh');

//Halaman Indikator
Route::get('/indikator','IndikatorController@index')->name('indikator');
Route::get('/indikator2','IndikatorController@indikator2')->name('indikator2');
Route::post('/test','TestController@store')->name('test');


