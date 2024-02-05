<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedmineController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

    // return view('welcome');

    // Route::get('/tasks', 'TaskController@index');
    // Route::get('/tasks/create', 'TaskController@create');
    // Route::post('/tasks', 'TaskController@store');
    // Route::delete('/tasks/{task}', 'TaskController@delete');
    // Route::get('/tasks/search', 'TaskController@search');

Route::get('/tasks', [RedmineController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [RedmineController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [RedmineController::class, 'store'])->name('tasks.store');
Route::delete('/tasks/{taskId}', [RedmineController::class, 'destroy'])->name('tasks.destroy');


// });
