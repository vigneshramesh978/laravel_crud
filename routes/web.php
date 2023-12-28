<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ShowController;



Route::get('/', function () {
    return view('login');
});

// Route::get('/edit/{id}', function ($id) {
//     return $id;
// });

Route::post('/insert', [LogController::class, 'insert']);
Route::get('/list', [LogController::class, 'list']);
Route::get('/edit/{id}', [LogController::class, 'edit']);
Route::post('/update/{id}', [LogController::class, 'update']);
Route::get('/delete/{id}', [LogController::class, 'delete']);


//Route::view('log','page');

Route::post('/add', [ShowController::class, 'add']);
//Route::get('/show', [ShowController::class, 'show']);
Route::get('/edit_show/{id}', [ShowController::class, 'edit_show']);
Route::post('/show_update/{id}', [ShowController::class, 'show_update']);
Route::get('/delete_show/{id}', [ShowController::class, 'delete_show']);