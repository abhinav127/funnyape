<?php

use App\Http\Controllers\UserController;
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



Route::get('/', [UserController::class, 'index']);
Route::get('mint', [UserController::class, 'home']);
Route::get('funape/{id}', [UserController::class, 'funape']);
Route::get('token/{id}', [UserController::class, 'token']);
Route::get('mytoken', [UserController::class, 'mytoken']);
Route::get('getimage', [UserController::class, 'getimage']);
