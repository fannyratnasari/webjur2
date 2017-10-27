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

Route::get('/', 'WebjurController@index');

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/beranda',[
    'uses' => 'WebjurController@index',
    'as' => 'webjur.beranda'
]);

Route::get('/sarpras',[
    'uses' => 'WebjurController@showSarpras',
    'as' => 'webjur.sarpras'
]);

Route::get('/info/beasiswa',[
    'uses' => 'InfoController@showBeasiswa',
    'as' => 'webjur.beasiswa'
]);

Route::get('/info/kegiatan',[
    'uses' => 'KegiatanController@show',
    'as' => 'webjur.kegiatan'
]);