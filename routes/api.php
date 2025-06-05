<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');


Route::apiResource('transactions', TransactionController::class);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('genres', genreController::class)->only(['store', 'update', 'show']);
    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'show']);
    Route::apiResource('books', BookController::class)->only(['store', 'update', 'show']);
    Route::apiResource('transactions', TransactionController::class)->only(['store', 'update', 'show']);
    
    Route::middleware('role:admin')->group(function () {
        Route::apiResource('genres', genreController::class)->only(['index', 'destroy']);
        Route::apiResource('authors', AuthorController::class)->only(['index', 'destroy']);
        Route::apiResource('books', BookController::class)->only(['index', 'destroy']);
        Route::apiResource('transactions', TransactionController::class)->only(['index', 'destroy']);

    });
});
