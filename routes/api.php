<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CodeeditorController;
use App\Http\Controllers\Api\EscaperoomController;
use App\Http\Controllers\Api\LogictestsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');
//rutas de logictest:
Route::get('/logictest', [LogictestsController::class, 'index'])->name('logictestApi');

Route::delete('/logictest/delete/{id}', [LogictestsController::class, 'destroy'])->name('destroylogictestApi');

Route::get('/logictest/create', [LogictestsController::class, 'create'])->name('createlogictestApi');

Route::post('/logictest/store',[LogictestsController::class, 'store'])->name('storelogictestApi');

Route::get('/logictest/edit/{id}',[LogictestsController::class, 'edit'])->name('editlogictestApi');

Route::put('/logictest/update/{id}',[LogictestsController::class, 'update'])->name('updateLogictest');

Route::get('/logictest/show/{id}',[LogictestsController::class, 'show'])->name('showlogictestApi');

//rutas de codeeditor:
Route::get('/codeeditor', [CodeeditorController::class, 'index'])->name('codeeditorApi');

Route::delete('/codeeditor/delete/{id}', [CodeeditorController::class, 'destroy'])->name('destroycodeeditorApi');

Route::get('/codeeditor/create', [CodeeditorController::class, 'create'])->name('createcodeeditorApi');

Route::post('/codeeditor/store',[CodeeditorController::class, 'store'])->name('storecodeeditorApi');

Route::get('/codeeditor/edit/{id}',[CodeeditorController::class, 'edit'])->name('editcodeeditorApi');

Route::put('/codeeditor/update/{id}',[CodeeditorController::class, 'update'])->name('updatecodeeditorApi');

Route::get('/codeeditor/show/{id}',[CodeeditorController::class, 'show'])->name('showcodeeditorApi');

//rutas de userlist:
Route::get('/user', [UserController::class, 'index'])->name('userApi');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('destroyuserApi');

Route::get('/user/create', [UserController::class, 'create'])->name('createuserApi');

Route::post('/user/store',[UserController::class, 'store'])->name('storeuserApi');

Route::get('/user/edit/{id}',[UserController::class, 'edit'])->name('edituserApi');

Route::put('/user/update/{id}',[UserController::class, 'update'])->name('updateuserApi');

Route::get('/user/show/{id}',[UserController::class, 'show'])->name('showuserApi');

//rutas auth
Route::post('/auth/register', [AuthController::class, 'createUser'])->name('registerUser');
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('loginUser');

//ruta para exportar mi tabla de usuario
Route::get('/export/users', [\App\Http\Controllers\ExcelController::class,'UserExport'])->name('exportUser');

//ruta para importar mi csv de usuarios
Route::get('/import/users', [App\Http\Controllers\ExcelController::class, 'UserImport']);


//pivot:
Route:: get('/addLogicTestToEscaperoom/{id1}/{idList}', [LogictestsController::class, 'addLogicTestToEscaperoom'])->name('addLogicTestToEscaperoom');//->middleware('auth'); //para a??adir pruebas de l??gica a un escape room
Route:: get('/removeLogicTestToEscaperoom/{id1}/{id2}', [LogictestsController::class, 'removeLogicTestToEscaperoom'])->name('removeLogicTestToEscaperoom');//->middleware('auth'); //para quitar de un escape room una prueba de l??gica

//Escaperoom
Route::get('/escaperoom', [EscaperoomController::class, 'index'])->name('escaperoomApi'); //muestra los escape roome que tenemos
Route::get('/escaperoom/{id}',[EscaperoomController::class, 'show'])->name('showEscaperoomApi');
Route::post('/escaperoom/store',[EscaperoomController::class, 'store'])->name('storeEscapeRoomApi'); //para crear un escape room
Route::delete('/escaperoom/delete/{id}', [EscaperoomController::class, 'destroy'])->name('destroyEscaperoomApi');

//LogictestInEscaperoom
Route::get('/myLogicTestsInEscapeRoom/{id}', [EscaperoomController::class, 'myLogicTestsInEscapeRoom'])->name('myLogicTestsInEscapeRoom'); //muestra las pruebas de l??gica que tenemos en un escape room