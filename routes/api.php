<?php

use App\Http\Controllers\Api\LogictestsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [LogictestsController::class, 'index'])->name('logictestApi');