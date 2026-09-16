<?php

declare(strict_types=1);

use App\Http\Controllers\FarmingMethodController;
use Illuminate\Support\Facades\Route;

Route::get('/test', fn () => ['ok' => true]);
Route::post('/farming-methods', [FarmingMethodController::class, 'store']);
