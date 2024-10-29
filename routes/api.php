<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//LandAffairsSchedulingService
Route::post('/getService', 'App\Http\Controllers\apiController@getService');
Route::get('/showServices', 'App\Http\Controllers\apiController@showServices');



Route::get('/studentData', 'App\Http\Controllers\golestanController@getStudentData');



Route::get('/getAddress', 'App\Http\Controllers\postController@getAddress');



Route::post('/getInquiry', 'App\Http\Controllers\msrtcontroller@getInquiry');


Route::post('/SendData', 'App\Http\Controllers\apiController@SendData');
Route::get('/SendMapData', 'App\Http\Controllers\apiController@SendMapData');





