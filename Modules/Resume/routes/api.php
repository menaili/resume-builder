<?php

use Illuminate\Support\Facades\Route;
use Modules\Resume\Http\Controllers\ResumeController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('resume', ResumeController::class)->names('resume');
});
