<?php

use App\Http\Controllers\Api\CodeeditorController;
use App\Http\Controllers\Api\LogictestsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas de logictest:
Route::get('/logictest', [LogictestsController::class, 'index'])->name('logictestApi');

Route::delete('/logictest/delete/{id}', [LogictestsController::class, 'destroy'])->name('destroylogictestApi');

Route::get('/logictest/create', [LogictestsController::class, 'create'])->name('createlogictestApi');

Route::post('/logictest/store',[LogictestsController::class, 'store'])->name('storelogictestApi');

Route::get('/logictest/edit/{id}',[LogictestsController::class, 'edit'])->name('editlogictestApi');

Route::patch('/logictest/update/{id}',[LogictestsController::class, 'update'])->name('updateLogictest');

Route::get('/logictest/show/{id}',[LogictestsController::class, 'show'])->name('showlogictestApi');

//rutas de codeeditor:
Route::get('/codeeditor', [CodeeditorController::class, 'index'])->name('codeeditorApi');



