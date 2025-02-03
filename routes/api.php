<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// added extensions starts
use App\Http\Controllers\UserController;
// added extensions ends

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/list', [UserController::class, 'index']);
Route::post('/users/register', [UserController::class, 'store']);
