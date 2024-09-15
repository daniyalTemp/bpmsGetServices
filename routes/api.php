<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//LandAffairsSchedulingService
Route::post('/getService', 'App\Http\Controllers\apiController@getService');
Route::get('/showServices', 'App\Http\Controllers\apiController@showServices');



Route::get('/studentData/{stId}', 'App\Http\Controllers\golestanController@getStudentData');




