<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Traits\Uuids;

// MODELS
use App\Models\Plan;
use App\Models\Referral;

class User extends Authenticatable
{
    use HasFactory, Notifiable,Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referral_code',
        'referrer_id',
        'plan_id',
        'wallet_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function referrals(){
        return $this->hasMany(User::class,'referrer_id','referral_code');
    }

    public function referrer(){
        return $this->belongsTo(User::class,'referrer_id','referral_code');
    }
}
