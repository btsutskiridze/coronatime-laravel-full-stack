@props(['name', 'class' => '', 'type' => 'text', 'placeholder' => ''])
<div class="{{ $class }}">
    <label for="{{ $name }}"
        class="block text-sm md:text-base mt-3 font-bold text-[#010414]">{{ __('texts.' . $name) }}</label>
    <div class="mt-1 relative">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}"
            placeholder="{{ __('texts.' . $placeholder) }}"
            class="block w-full appearance-none rounded-lg border 
            px-3 py-[1.14rem]  placeholder-[#808189] shadow-sm focus:border-indigo-500 
            focus:outline-none focus:ring-indigo-500 sm:text-base 
            {{-- checking bellow if errors has occured yet or no to give borders according to it --}}
            @if (!$errors->any()) border-[#E6E6E7]
            @elseif($errors->has($name)) border-[#CC1E1E]
            @else border-[#249E2C] @endif
            ">
        <img src="{{ asset('images/success.svg') }}"
            class="absolute top-5 right-2
            {{-- checking bellow if errors has occured yet or no to hide or display success --}}
            @if (!$errors->any() || $errors->has($name)) hidden
            @else block @endif
        "
            alt="success">
        @error($name)
            <div class="absolute mt-[2px] flex flex-row justify-center items-center">
                <img src="{{ asset('images/error.svg') }}" alt="error">
                <p class="text-sm m-0 text-[#CC1E1E]">
                    {{ __('texts.' . $message) }}
                </p>
            </div>
        @enderror
    </div>
</div>
