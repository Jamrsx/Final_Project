<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoordinatorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/students', [CoordinatorController::class, 'storeStudent']);

Route::post('/tracks', [CoordinatorController::class, 'addTrack']);

Route::post('/instructors', [CoordinatorController::class, 'addInstructor']);
Route::get('/ShowInstructor/{id}', [CoordinatorController::class, 'showInstructorById']);
Route::put('/UpdateInstructor/{id}', [CoordinatorController::class, 'updateInstructor']);
Route::delete('/DeleteInstructor/{id}', [CoordinatorController::class, 'deleteInstructor']);


