<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('users', UserController::class);
Route::apiResource('posts', PostController::class);
Route::apiResource('comments', CommentController::class);

Route::get('users/{id}/posts', [UserController::class, 'getUserPosts']);
Route::get('users/{id}/comments', [UserController::class, 'getUserComments']);
Route::get('posts/{id}/comments', [PostController::class, 'getPostComments']);
