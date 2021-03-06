<?php

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
    return view('Welcome');

});
Route::get('/about', function () {
    return view('About');
});
Route::get('/makale/{id}','MakaleController@makaleDetay');
Route::get('/home','MakaleController@yeniMakale');
Route::post('/home','MakaleController@makaleEkle');
Route::get('/','MakaleController@makaleGetir');
Route::get('/home/sonyazilar','MakaleController@makaleProfileGetir');

Route::get('/home/duzenle/{id}','MakaleController@makaleDuzenle');
Route::post('/home/duzenle/{id}','MakaleController@makaleGuncelle');
Route::get('/home/sil/{id}','MakaleController@makaleSil');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bizkimiz', 'HomeController@about')->name('about');
