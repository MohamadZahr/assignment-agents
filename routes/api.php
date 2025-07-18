<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/agents', [\App\Http\Controllers\AgentController::class, 'getAllAgents'])
    ->name('agents.getAll');
