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


Route::get('/','UjianController@get')
->name('transaksi_index');
Route::post('/','UjianController@create')
->name('transaksi_tambah');
Route::get('/edit/{id}','UjianController@find')
->name('transaksi_edit');
Route::put('/edit/{id}','UjianController@update')
->name('transaksi_update');
Route::get('/hapus/{id}','UjianController@delete')
->name('transaksi_hapus');
Route::get('/cetak','UjianController@cetak')
->name('cetak');
