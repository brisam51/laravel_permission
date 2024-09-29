<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'login']);
Route::post('/authLogin',[AuthController::class,'authLogin'])->name('authlogin');
Route::get('/dashboard',[AuthController::class,'dashboard']);
Route::get('/logout',[AuthController::class,'logout']);
Route::group(['middleware'=>'userdamin'],function(){
    Route::get('/dashboard',[AuthController::class,'dashboard']);

});

