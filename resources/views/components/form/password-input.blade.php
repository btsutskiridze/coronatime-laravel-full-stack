<div>
    <label for="password"
        class="block text-sm md:text-base mt-3 font-bold text-[#010414]">{{ __('texts.password') }}</label>
    <div class="mt-1 relative">
        <input id="password" name="password" type="password" value="{{ old('password') }}"
            placeholder="{{ __('texts.fill_in_password') }}"
            class="block w-full appearance-none rounded-lg border 
            px-3 py-[1.14rem]  placeholder-[#808189] shadow-sm focus:border-indigo-500 
            focus:outline-none focus:ring-indigo-500 sm:text-base 
            {{-- checking bellow if errors has occured yet or no to give borders according to it --}}
            @if (!$errors->any()) border-[#E6E6E7]
            @elseif($errors->has('password') || $errors->any()) border-[#CC1E1E]
            @else border-[#249E2C] @endif
            ">
        <img src="{{ asset('images/success.svg') }}"
            class="absolute top-5 right-2
            {{-- checking bellow if errors has occured yet or no to hide or display success --}}
            @if (!$errors->any() || ($errors->has('password') || $errors->any())) hidden
            @else block @endif
        "
            alt="success">
        @error('password')
            <div class="absolute mt-[2px] flex flex-row justify-center items-center">
                <img src="{{ asset('images/error.svg') }}" alt="error">
                <p class="text-sm m-0 text-[#CC1E1E]">
                    {{ __('texts.' . $message) }}
                </p>
            </div>
        @enderror
    </div>
</div>
