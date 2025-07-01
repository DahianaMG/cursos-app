<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\EvaluationController;

//Rutas publicas
Route::post('/login', [AuthController::class, 'login']);
Route::get('category/{id}/courses', [CourseController::class, 'coursesByCategory']);

//Rutas usuarios autenticados
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

//Rutas administrador
Route::middleware('auth:sanctum', 'role:admin')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);

    //Categorias
    Route::get('get-categories', [CategoryController::class, 'index']);
    Route::post('set-category', [CategoryController::class, 'store']);
    Route::get('get-category/{id}', [CategoryController::class, 'show']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::delete('delete-category/{id}', [CategoryController::class, 'destroy']);

    //Cursos
    Route::get('get-courses', [CourseController::class, 'index']);
    Route::post('set-course', [CourseController::class, 'store']);
    Route::get('get-course/{id}', [CourseController::class, 'show']);
    Route::put('update-course/{id}', [CourseController::class, 'update']);
    Route::delete('delete-course/{id}', [CourseController::class, 'destroy']);

    //Inscripciones
    Route::post('admin/set-enrollment', [EnrollmentController::class, 'adminStore']);

    //Evaluaciones
    Route::post('set-evaluation', [EvaluationController::class, 'store']);
    Route::get('user/{id}/evaluations', [EvaluationController::class, 'evaluationsByUser']);
});

//Rutas estudiantes
Route::middleware('auth:sanctum', 'role:student')->group(function () {
    //Inscripciones
    Route::post('set-enrollment', [EnrollmentController::class, 'store']);

    //Evaluaciones
    Route::get('my-evaluations', [EvaluationController::class, 'myEvaluations']);
});





