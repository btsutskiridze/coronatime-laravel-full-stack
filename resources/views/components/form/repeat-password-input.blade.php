<div>
    <label for="password_confirmation"
        class="block text-sm md:text-base mt-3 font-bold text-[#010414]">{{ __('texts.password_confirmation') }}</label>
    <div class="mt-1 relative">
        <input id="password_confirmation" name="password_confirmation" type="password"
            value="{{ old('password_confirmation') }}" placeholder="{{ __('texts.repeat_password') }}"
            class="block w-full appearance-none rounded-md border 
            px-3 py-[1.14rem]  placeholder-[#808189] shadow-sm focus:border-indigo-500 
            focus:outline-none focus:ring-indigo-500 sm:text-base 
            {{-- checking bellow if errors has occured yet or no to give borders according to it --}}
            @if (!$errors->any()) border-gray-300 
            @elseif($errors->has('password_confirmation') || $errors->any()) border-red-600
            @else border-green-600 @endif
            ">
        <img src="{{ asset('images/success.svg') }}"
            class="absolute top-5 right-2
            {{-- checking bellow if errors has occured yet or no to hide or display success --}}
            @if (!$errors->any() || ($errors->has('password_confirmation') || $errors->any())) hidden
            @else block @endif
        "
            alt="success">
    </div>
</div>
