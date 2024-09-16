<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('msrt.index');
//});
Route::get('/', 'App\Http\Controllers\msrtcontroller@index')->name('msrt.index');
Route::get('/all', 'App\Http\Controllers\msrtcontroller@all')->name('msrt.all');
Route::post('/degreeStatusChange/{id}', 'App\Http\Controllers\msrtcontroller@changestatus')->name('degreeStatusChange');

