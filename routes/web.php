<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PetController::class, 'list']);

Route::get('/new', [PetController::class, 'insert']);
Route::post('/new', [PetController::class, 'insert']);

Route::get('/pet/update/{id}', [PetController::class, 'update']);
Route::post('/pet/update/{id}', [PetController::class, 'update']);

Route::get('/pet/delete/{id}', [PetController::class, 'remove']);
