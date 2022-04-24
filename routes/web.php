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

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/friends', [CobaController::class, 'index']);
Route::get('/friends/create', [CobaController::class, 'create']);
Route::post('/friends/store', [CobaController::class, 'store']);
Route::get('/friends/{id}', [CobaController::class, 'show']);
Route::gets('/friends/{id}/edit', [CobaController::class, 'edit']);
Route::put('/friends/{id}', [CobaController::class, 'update']);
Route::delete('/friends/{id}', [CobaController::class, 'destroy']);


