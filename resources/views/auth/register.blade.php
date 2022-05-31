<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        <div class="absolute right-[36%] top-[33%] scale-90 rotate-180 xl:block hidden">
            <div class="relative w-fit">
                <div class="gradiant-thumbtack-dot w-4 h-[3px] -rotate-45 absolute -right-1 top-2"></div>
                  <div class="gradiant-thumbtack-base w-10 h-10 rounded-full relative">
                    <div class="bg-white w-[2px] h-[7px] rounded-lg absolute top-2 right-2 -rotate-[35deg] opacity-70 z-10"></div>
                    <div class="gradiant-thumbtack-middle w-6 h-6 rounded-full absolute top-3 right-3">
                        <div class="gradiant-thumbtack-top w-7 h-7 rounded-full absolute top-2 right-2">
                            <div class="bg-white w-[2px] h-[4px] rounded-lg absolute top-2 right-2 -rotate-[35deg] opacity-70"></div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="absolute left-1/3 top-[32%] hidden xl:block">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 -rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
        </div>
        <div class="absolute left-[35%] bottom-1/4 hidden xl:block">
            <div class="relative bg-[#fffdd9] opacity-[0.9] w-32 h-12 rotate-[30deg]">
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -right-9 rotate-180"></div>
                <div class="scotch absolute bg-[#fffdd9] w-10 h-12 -left-9 "></div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
