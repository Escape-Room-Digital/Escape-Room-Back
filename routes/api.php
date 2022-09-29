<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CodeeditorController;
use App\Http\Controllers\Api\LogictestsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum']], function () {
//rutas de logictest:
Route::get('/logictest', [LogictestsController::class, 'index'])->name('logictestApi')->middleware('isadmin');

Route::delete('/logictest/delete/{id}', [LogictestsController::class, 'destroy'])->name('destroylogictestApi');//->middleware('isadmin');

Route::get('/logictest/create', [LogictestsController::class, 'create'])->name('createlogictestApi');//->middleware('isadmin');

Route::post('/logictest/store',[LogictestsController::class, 'store'])->name('storelogictestApi');//->middleware('isadmin');

Route::get('/logictest/edit/{id}',[LogictestsController::class, 'edit'])->name('editlogictestApi');//->middleware('isadmin');

Route::patch('/logictest/update/{id}',[LogictestsController::class, 'update'])->name('updateLogictest');//->middleware('isadmin');

Route::get('/logictest/show/{id}',[LogictestsController::class, 'show'])->name('showlogictestApi');//->middleware('isadmin');

});

//rutas de codeeditor:
Route::get('/codeeditor', [CodeeditorController::class, 'index'])->name('codeeditorApi');//->middleware('isadmin');

Route::delete('/codeeditor/delete/{id}', [CodeeditorController::class, 'destroy'])->name('destroycodeeditorApi');//->middleware('isadmin');

Route::get('/codeeditor/create', [CodeeditorController::class, 'create'])->name('createcodeeditorApi');//->middleware('isadmin');

Route::post('/codeeditor/store',[CodeeditorController::class, 'store'])->name('storecodeeditorApi');//->middleware('isadmin');

Route::get('/codeeditor/edit/{id}',[CodeeditorController::class, 'edit'])->name('editcodeeditorApi');//->middleware('isadmin');

Route::put('/codeeditor/update/{id}',[CodeeditorController::class, 'update'])->name('updatecodeeditorApi');//->middleware('isadmin');

Route::get('/codeeditor/show/{id}',[CodeeditorController::class, 'show'])->name('showcodeeditorApi');//->middleware('isadmin');

//rutas de userlist:
Route::get('/user', [UserController::class, 'index'])->name('userApi');//->middleware('isadmin');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('destroyuserApi');//->middleware('isadmin');

Route::get('/user/create', [UserController::class, 'create'])->name('createuserApi');//->middleware('isadmin');

Route::post('/user/store',[UserController::class, 'store'])->name('storeuserApi');//->middleware('isadmin');

Route::get('/user/edit/{id}',[UserController::class, 'edit'])->name('edituserApi');//->middleware('isadmin');

Route::patch('/user/update/{id}',[UserController::class, 'update'])->name('updateuserApi');//->middleware('isadmin');

Route::get('/user/show/{id}',[UserController::class, 'show'])->name('showuserApi');//->middleware('isadmin');

//rutas auth
Route::post('/auth/register', [AuthController::class, 'createUser'])->name('registerUser');
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('loginUser');


