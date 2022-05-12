<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestMidController;


Route::get('/',[TestMidController::class,'index']);
Route::get('/add', [TestMidController::class, 'create']);
Route::post('/add', [TestMidController::class, 'store']);
Route::get('/destroy/{id}', [TestMidController::class,'destroy']);
Route::post('/edit/{id}', [TestMidController::class,'update']);
Route::get('/edit/{id}', [TestMidController::class,'edit']);
