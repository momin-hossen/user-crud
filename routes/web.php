<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('users/index', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::post('users/store', [UserController::class, 'store']);
Route::get('users/delete/{id}', [UserController::class, 'delete']);
Route::get('users/edit/{id}', [UserController::class, 'edit']);
Route::post('users/update/{id}', [UserController::class, 'update']);