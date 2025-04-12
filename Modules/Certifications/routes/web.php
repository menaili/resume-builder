<?php

use Illuminate\Support\Facades\Route;
use Modules\Certifications\Http\Controllers\CertificationsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('certifications', CertificationsController::class)->names('certifications');
});
