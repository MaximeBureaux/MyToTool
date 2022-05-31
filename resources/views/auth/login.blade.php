<x-guest-layout data-barba="wrapper">
    <div data-barba="container" data-barba-namespace="home">
        <x-jet-authentication-card>
            <x-slot name="logo">
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_shqk4llg.json"  background="transparent"  speed="1.5"  style="width: 300px; height: 150px;"    autoplay></lottie-player>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">Se souvenir</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <p>Pas encore de compte ?&#8239;</p>
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" href="/register">
                        s'inscire
                    </a>
                </div>
            </form>
            <div class="absolute -right-10 -top-5">
                <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                    <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                    <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
                </div>
            </div>
            <div class="absolute -left-10 -bottom-10">
                <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                    <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                    <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
                </div>
            </div>
        </x-jet-authentication-card>
    </div>
</x-guest-layout>
