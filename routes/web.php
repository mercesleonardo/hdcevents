<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/events/enter', [EventController::class, 'enter']);

Route::get('/events/cadastrar', [EventController::class, 'cadastro']);

