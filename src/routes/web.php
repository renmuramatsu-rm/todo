<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
// コントローラとの紐づけ

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

Route::get('/', [TodoController::class, 'index']);
// getで変数を受け取った際にコントローラーのindexを動かす
Route::post('/todos', [TodoController::class, 'store']);
// postで変数を受け取った際にコントローラーのstoreを動かす