<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-categories', [CategoryController::class, 'index']);
Route::post('set-category', [CategoryController::class, 'store']);
Route::get('get-category/{id}', [CategoryController::class, 'show']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::delete('delete-category/{id}', [CategoryController::class, 'destroy']);

Route::get('get-courses', [CourseController::class, 'index']);
Route::post('set-course', [CourseController::class, 'store']);
Route::get('get-course/{id}', [CourseController::class, 'show']);
Route::put('update-course/{id}', [CourseController::class, 'update']);
Route::delete('delete-course/{id}', [CourseController::class, 'destroy']);
