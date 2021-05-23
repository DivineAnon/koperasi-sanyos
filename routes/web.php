<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'BerandaController@index')->name('home');
    Route::get('/anggota', 'AnggotaController@index')->name('anggota');
    // Route::post('','');
    // Route::post('','');
    Route::get('/pinjaman', 'PinjamanController@index')->name('pinjaman');
    // Route::post('','');
    // Route::post('','');
    Route::get('/simpanan', 'SimpananController@index')->name('simpanan');
    // Route::post('','');
    // Route::post('','');
    Route::get('/kspa', 'KSPAController@index')->name('kspa');
    // Route::post('','');
    // Route::post('','');
    Route::get('/rekening-anggota', 'RekAnggotaController@index')->name('rekening-anggota');
    // Route::post('','');
    // Route::post('','');
    Route::get('logout', 'AuthController@logout')->name('logout');
});
