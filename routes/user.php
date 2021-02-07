<?php

use App\Http\Controllers\ProfileController;

Route::get('/dashboard/profile',[ProfileController::class,'index'])->name('profile')->middleware('auth');