<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/',[AuthController::class,'login']);
Route::post('/authLogin',[AuthController::class,'authLogin'])->name('authlogin');
Route::get('/dashboard',[AuthController::class,'dashboard']);
Route::get('/logout',[AuthController::class,'logout']);

//permission
Route::get('permission/list',[PermissionController::class,'index']);
Route::get('permission/create',[PermissionController::class,'create']);
Route::post('permission/store',[PermissionController::class,'store']);
Route::get('permission/edit/{id}',[PermissionController::class,'edit']);
Route::post('permission/update/{id}',[PermissionController::class,'update']);
Route::get('permission/delete/{id}',[PermissionController::class,'destroy']);
//role
Route::get('role/list',[RoleController::class,'index']);
Route::get('role/create',[RoleController::class,'create']);
Route::post('role/store',[RoleController::class,'store']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::post('role/update/{id}',[RoleController::class,'update']);
Route::get('role/delete/{id}',[RoleController::class,'destroy']);
Route::group(['middleware'=>'userdamin'],function(){

});

