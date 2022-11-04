<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// TASKS
Route::group([
    'middleware' => ['auth', 'verified'],
    'prefix' => 'tasks'
], function () {
    Route::get('/', [TaskController::class, 'index']);
    Route::get('/create', [TaskController::class, 'create']);
    Route::post('/', [TaskController::class, 'store']);
    Route::get('/{id}', [TaskController::class, 'show']);
    Route::get('/{id}/edit', [TaskController::class, 'edit']);
    Route::put('/{id}', [TaskController::class, 'update']);
    Route::delete('/', [TaskController::class, 'destroy']);
});


require __DIR__.'/auth.php';
