<?php

use App\Http\Controllers\ConcernController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/concerns', [ConcernController::class, 'store'])->middleware('auth:sanctum');
