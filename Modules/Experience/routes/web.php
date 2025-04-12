<?php

use Illuminate\Support\Facades\Route;
use Modules\Experience\Http\Controllers\ExperienceController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('experience', ExperienceController::class)->names('experience');
});
