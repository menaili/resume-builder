<?php

use Illuminate\Support\Facades\Route;
use Modules\Experience\Http\Controllers\ExperienceController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('experience', ExperienceController::class)->names('experience');
});
