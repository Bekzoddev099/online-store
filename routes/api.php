<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
=======
>>>>>>> 1814561 (first commit)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
<<<<<<< HEAD

Route::apiResource('/users', UserController::class);

Route::apiResource('/categories', CategoryController::class);

Route::apiResource('/products', ProductController::class);
=======
>>>>>>> 1814561 (first commit)
