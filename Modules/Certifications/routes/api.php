<?php

use Illuminate\Support\Facades\Route;
use Modules\Certifications\Http\Controllers\CertificationsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('certifications', CertificationsController::class)->names('certifications');
});
