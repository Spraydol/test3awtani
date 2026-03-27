<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| All routes return JSON. Protected routes require a Sanctum Bearer token.
|
| Usage:
|   POST /api/register       → register a new user
|   POST /api/login          → get a token
|   GET  /api/user           → get authenticated user (token required)
|   POST /api/logout         → revoke token (token required)
*/

// Public API endpoints
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// Protected API endpoints (Sanctum token required)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user',    [UserController::class, 'me']);
    Route::put('/user',    [UserController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
