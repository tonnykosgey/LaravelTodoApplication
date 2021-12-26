<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
/*
Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [ToDosController::class, 'home']);

Route::get('show/{todo}', [ToDosController::class, 'show']);

Route::get('new-todos', [ToDosController::class, 'create']);

Route::post('save-todo', [ToDosController::class, 'save']);

Route::get('todos/{todo}/edit', [ToDosController::class, 'edit']);

Route::post('todos/{todo}/update-todo', [ToDosController::class, 'update']);

Route::get('todos/{todo}/delete', [ToDosController::class, 'destroy']);

Route::get('todos/{todo}/complete', [ToDosController::class, 'complete']);




