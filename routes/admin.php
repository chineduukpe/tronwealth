<?php

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ReferralController;


Route::get('/dashboard/users',[UsersController::class,'index'])->name('admin.users');

// Change to post route and receive data from form
Route::get('/dashboard/referral/approve/{user_id}',[ReferralController::class,'approve'])->name('admin.referral.approve');