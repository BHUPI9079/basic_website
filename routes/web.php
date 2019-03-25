<?php

Route::get('/', function () {
    return view('welcome');
 });

Auth:: routes();
 
 Route::get('/KAFE-QILLA', 'HomeController@KAFE_QILLA');

 Route::get('/home', 'HomeController@index');

 

 

  