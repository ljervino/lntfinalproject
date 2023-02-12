<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

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

Route::get('/create', [TableController::class, 'getCreatePage'])->name('getCreatePage');

Route::post('/create-table', [TableController::class, 'createTable'])->name('createTable');

Route::get('/get-tables', [TableController::class, 'getTables'])->name('getTables');

Route::get('/update-tables/{id}', [TableController::class, 'getTableById'])->name('getTableById');

Route::patch('/update-tables/{id}', [TableController::class, 'updateTable'])->name('updateTable');

Route::delete('/delete-tables/{id}', [TableController::class, 'deleteTable'])->name('delete');

