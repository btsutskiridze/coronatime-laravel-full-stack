@props(['name', 'class' => '', 'type' => 'text', 'placeholder' => ''])
<div class="{{ $class }}">
    <label for="{{ $name }}"
        class="block text-sm md:text-base font-bold text-[#010414]">{{ __('texts.' . $name) }}</label>
    <div class="mt-1">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" required
            placeholder="{{ __('texts.' . $placeholder) }}"
            class="block w-full appearance-none rounded-md border border-gray-300
            px-3 py-[1.14rem] placeholder-[#808189] shadow-sm focus:border-indigo-500 
            focus:outline-none focus:ring-indigo-500 sm:text-base ">
    </div>
</div>
