@props(['name', 'class' => ''])
<div>
    <button type="submit"
        class="flex w-full justify-center rounded-lg border border-transparent
                        bg-[#0FBA68] py-[1.14rem] px-4 mb-6 md:text-base text-sm font-black 
                        uppercase text-white shadow-sm hover:bg-green-600 {{ $class }}">
        {{ __('texts.' . $name) }}
    </button>
</div>
