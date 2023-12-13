<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


Route::get('/form',[userController:: class,'form']);
Route::post('/form',[userController:: class,'save']);
Route::get('/table',[userController:: class,'table']);
Route::get('/edit/{id}',[userController:: class,'edit']);
Route::post('/edit/update/{id}',[userController:: class,'update']);
Route::get('/table/delete/{id}',[userController:: class,'delete']);