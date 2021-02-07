<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Name -->
            <div class='input-field'>
                <input type="text" name='name'>
                <label for="name">{{__("Name")}}</label>  
            </div>
            
            <!-- Email -->
            <div class='input-field'>
                <input type="text" name='email'>
                <label for="name">{{__('Email')}}</label>  
            </div>
            
            <!-- Referral ID -->
            <div class='input-field'>
                <input type="text" name='referrer_id'>
                <label for="referrer_id">Referrer ID</label>  
            </div>
            
            <!--Wallet Address -->
            <div class='input-field'>
                <input type="text" name='wallet_address'>
                <label for="referrer">Wallet Address</label>  
            </div>
            
            <!-- Plan -->
            <div class="input-field">
                <select name="plan_id">
                    <option value="" disabled selected>Choose your Package</option>
                    <option value="1">Comp 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <label>Select Package</label>
            </div>
            
            <!-- Password -->
            <div class='input-field'>
                <input type="password" name='password' required auto-complete='new-password'>
                <label for="password">{{__('Password')}}</label>  
            </div>
            
            <!-- Confirm Password -->
            <div class='input-field'>
                <input type="password" name='password_confirmation'>
                <label for="password_confirmation">Confirm Password</label>  
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                
            </div>
            <div class="block mb-3 mt-3"> 
                <button class='btn red darken-2 w-full waves-effect waves-light'>{{ __('Register') }}</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@section('page-scripts')

@endsection