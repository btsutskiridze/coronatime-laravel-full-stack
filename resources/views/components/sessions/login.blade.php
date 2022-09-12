<div class=" w-full lg:w-[470px] ">

    <div>
        <h2 class="mt-6 text-2xl tracking-tight font-black text-[#010414]">
            {{ __('texts.welcome_back') }}
        </h2>

        <p class="mt-2 text-sm md:text-base xl:text-xl text-gray-600 whitespace-nowrap">
            {{ __('texts.welcome_back_please_enter_your_details') }}
        </p>
    </div>

    <div class="mt-8">

        <div class="mt-6">
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <x-form.input name="username" placeholder="enter_unique_username_or_email" />
                <x-form.password-input />

                <div class="flex items-center justify-between">
                    <x-form.checkbox />
                    <div class="text-sm">
                        <a href="{{ route('forgot_password.enter_email') }}"
                            class="font-bold text-[#2029F3] hover:text-indigo-500">{{ __('texts.forgot_password') }}?</a>
                    </div>
                </div>

                <x-form.button name="log_in" />

                <div class="text-center">
                    <p class="text-[#808189] text-sm md:text-base">{{ __('texts.dont_have_an_account') }}? <a
                            href="{{ route('register.show') }}"
                            class="text-[#010414] font-bold">{{ __('texts.sign_up_for_free') }}</a></p>
                </div>

            </form>
        </div>
    </div>

</div>
