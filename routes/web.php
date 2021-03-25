<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route  de la page 'A propos'
Route::get('/a-propos', [App\Http\Controllers\AproposController::class, 'index'])->name('apropos');
// Route de la page 'Todo'
Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todos');
//Route::resource('todos', 'TodoController');

