<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'referrer_id' => 'required|string',
            'plan_id' => 'required|numeric',
            'wallet_address' => 'required|string'
            // 'position' => 'required'
        ]);

        $referral_code_exists = true;
        
        // MAKE SURE REFERRAL CODES ARE UNIQUE
        while($referral_code_exists){
            $referral_code = rand(2909345,9123488);  
            $get_referrer = User::where('referral_code',$referral_code)->first();
            
            if (!$get_referrer) {
                $referral_code_exists = false;
            }
        }

        // dd($request->all());    
        
        Auth::login($user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'referrer_id' => $request->referrer_id,
                'plan_id' => $request->plan_id,
                'referral_code' => $referral_code,
                'wallet_address' => $request->wallet_address,

            ]));
        
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
        // return back()->with('success','Registration Successful. Please wait for admin\'s approval.');
    }
}
