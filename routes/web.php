<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ForumController::class, 'index']);
Route::get('/{id}/view', [ForumController::class, 'view']);
Route::get('/{id}/edit', [ForumController::class, 'edit']);
Route::get('/create', [ForumController::class, 'create']);
Route::post('/store', [ForumController::class, 'store']);
Route::post('/update', [ForumController::class, 'update']);
Route::delete('/{id}/delete', [ForumController::class, 'delete']);
Route::get('/{id}/category', [ForumController::class, 'category']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/{id}/view', [CategoryController::class, 'view']);
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete']);
Route::put('/category/{id}/update', [CategoryController::class, 'update']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
