<?php

use App\Http\Controllers\Api\Posts\IndexController;
use App\Http\Controllers\Api\Posts\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
Route::get('/{ulid}', ShowController::class)->name('show');
