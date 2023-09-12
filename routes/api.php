<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    $names = ['Gabriele', 'Lorenzo', 'Pablo', 'Nicolò'];
    $total = count($names);
    return response()->json(compact('names', 'total'));
});

// Rotta per ricevere lista dei progetti

// Route::apiResource('projects', ProjectController::class);

Route::get('/projects', [ProjectController::class, 'index']);

// Rotta per ricevere dettaglio di un progetto
Route::get('projects/{project}', ProjectController::class, 'show');
