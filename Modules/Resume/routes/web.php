<?php

use Illuminate\Support\Facades\Route;
use Modules\Resume\Http\Controllers\ResumeController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('resume', ResumeController::class)->names('resume');
});
