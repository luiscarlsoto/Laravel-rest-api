<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/showAll', [TaskController::class, 'index']);
Route::post('/create', [TaskController::class, 'store']);
Route::get('/show/{id}', [TaskController::class, 'show']);
Route::delete('/delete/{id}', [TaskController::class, 'deleteTask']);
Route::put('/update/{id}', [TaskController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
