<?php

use App\Http\Controllers\PolicyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('policies', PolicyController::class);
Route::get('/policies/{policy}/download', [PolicyController::class, 'downloadPolicyPDF']);
