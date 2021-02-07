<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class ReferralController extends Controller
{
    //
    public function approve($user_id){
        // $this->validate($request,[
        //     'user_id' => 'required',
        // ]);
        $user = User::where('id',$user_id)->first();

        $referrer = $user->referrer;
        
        $compensation = (($user->plan->price / 100) * $user->plan->compensation);
        
        $user->status = 'approved';

        $referrer->earnings = $referrer->earnings + $compensation;
        
        $user->save();

        $referrer->save();

        return redirect(route('admin.users'))->with('success','User has been approved.');

    }
}
