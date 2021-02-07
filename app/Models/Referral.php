<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

// MODELS
use App\Models\User;

class Referral extends Model
{
    use HasFactory,Uuids;

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function referrer(){
        return $this->belongsTo(User::class,'rererrer');
    }
}
