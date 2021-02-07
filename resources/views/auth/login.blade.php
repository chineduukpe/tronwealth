<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class='input-field'>
                <input type="text" name='email'>
                <label for="email">Email</label>
            </div>

            <!-- Password -->
            <div class='input-field'>
                <input type="password" name='password'>
                <label for="password">Password</label>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="row">
            @if (Route::has('password.request'))
                    <div class="col s12 mt-5">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    </div>
                @endif
                <div class="col s12">
                <button class='block w-full btn red waves-effect darken-2 btn-block mt-5 mb-2' type="submit">{{ __('Login') }}</button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
