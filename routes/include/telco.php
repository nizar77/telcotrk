<?php 
Route::resource('/kegiatan','KegiatanController');
Route::get('/kegiatan/theme','KegiatanController@theme');
Route::get('/user','KegiatanController@user');

