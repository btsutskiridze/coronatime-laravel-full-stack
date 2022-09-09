@props(['name', 'class' => '', 'type' => 'text', 'placeholder' => ''])
<div class="{{ $class }}">
    <label for="{{ $name }}"
        class="block text-sm md:text-base font-bold text-[#010414]">{{ __('texts.' . $name) }}</label>
    <div class="mt-1">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}"
            placeholder="{{ __('texts.' . $placeholder) }}"
            class="block w-full appearance-none rounded-md border border-gray-300
            px-3 py-[1.14rem] placeholder-[#808189] shadow-sm focus:border-indigo-500 
            focus:outline-none focus:ring-indigo-500 sm:text-base ">
        @error($name)
            <p class="absolute text-sm m-0 text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
