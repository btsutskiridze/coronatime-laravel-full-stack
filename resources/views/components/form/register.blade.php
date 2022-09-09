<div class=" w-full lg:w-[470px] ">

    <div>
        <h2 class="mt-6 text-2xl tracking-tight font-black text-[#010414]  whitespace-nowrap">
            {{ __('texts.welcome_to_coronatime') }}
        </h2>

        <p class="mt-2 text-sm md:text-base xl:text-xl text-gray-600 whitespace-nowrap">
            {{ __('texts.please_enter_required_info_to_sign_up') }}
        </p>
    </div>

    <div class="mt-8">

        <div class="mt-6">
            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf
                <x-form.input name="username" placeholder="enter_unique_username_or_email" />
                <x-form.input name="email" type="email" placeholder="enter_your_email" />
                <x-form.input name="password" type="password" placeholder="fill_in_password" />
                <x-form.input name="password_confirmation" type="password" placeholder="repeat_password" />

                <div class="flex items-center justify-between">
                    <x-form.checkbox />
                </div>

                <x-form.button name="sign_up" />

                <div class="text-center">
                    <p class="text-[#808189] text-sm md:text-base">{{ __('texts.already_have_an_account') }}? <a
                            href="{{ route('login.show') }}"
                            class="text-[#010414] font-bold">{{ __('texts.log_in') }}</a></p>
                </div>

            </form>
        </div>
    </div>

</div>
