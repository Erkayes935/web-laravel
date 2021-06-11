<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4"></x-jet-validation-errors>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-jet-label value="PApa" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label value="pword" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
                    <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                        Login with Facebook
                    </a>
                    <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                        Login with Google
                    </a>
                    <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                        Login with Github
                    </a>
                    </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
