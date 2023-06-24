<?php

declare(strict_types=1);

use App\Http\Controllers\Web\Projects\IndexController;
use App\Http\Controllers\Web\Projects\StoreController;
use Illuminate\Support\Facades\Route;


Route::get('/' , IndexController::class)->name('index');
Route::post('/', StoreController::class)->name('store');

