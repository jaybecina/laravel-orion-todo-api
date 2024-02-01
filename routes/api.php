<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\TodoController;
use App\Http\Controllers\Api\NoteContainerController;
use App\Http\Controllers\Api\NoteContainerTodoController;
use App\Http\Controllers\Api\TodoNoteContainerController;

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

Route::group(['as' => 'api.'], function() {
    Orion::resource('todos', TodoController::class);
    Orion::resource('note-containers', NoteContainerController::class);
    Orion::hasManyResource('note-containers', 'todos', NoteContainerTodoController::class);
    Orion::belongsToResource('todos', 'note-containers', TodoNoteContainerController::class);
});
