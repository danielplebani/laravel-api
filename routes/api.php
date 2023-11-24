<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\TechnologyController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/{project:id}', [ProjectController::class, 'show']);

Route::get('types', [TypeController::class, 'index'])->name('api.types');
Route::get('types/{type:id}', [TypeController::class, 'show']);

Route::get('technologies', [TechnologyController::class, 'index']);
Route::get('technologies/{technology:id}', [TechnologyController::class, 'show']);
