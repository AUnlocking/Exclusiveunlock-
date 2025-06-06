<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas de tu API. Estas rutas son cargadas por el
| RouteServiceProvider dentro de un grupo que tiene asignado el middleware "api".
| ¡Disfruta construyendo tu API!
|
*/

// Ruta para obtener información del usuario autenticado
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    $tasks = \App\Models\Task::all();
    return view('welcome', ['tasks' => $tasks]);
});

// Rutas para la gestión de tareas
Route::get('task/{id}', [TaskController::class, 'getTask']);
Route::post('task', [TaskController::class, 'addTask']);
Route::put('task/{id}', [TaskController::class, 'editTask']); // Se agregó {id} para identificar la tarea
Route::delete('task/{id}', [TaskController::class, 'deleteTask']);
