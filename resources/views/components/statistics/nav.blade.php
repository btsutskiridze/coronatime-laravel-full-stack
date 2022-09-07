<div>
    <h1 class="my-10 text-[1.6rem] font-extrabold">{{ __('texts.worldwide_statistics') }}</h1>
    <div>
        <a href="{{ route('worldwide.show') }}"
            class="inline-block text-sm md:text-base mr-6 md:mr-[4.5rem] pb-4 
            {{ Route::currentRouteName() == 'worldwide.show' ? ' border-b-[3px] border-[#010414] font-extrabold' : '' }}
            ">
            {{ __('texts.worldwide') }}
        </a>
        <a href="{{ route('bycountry.show') }}"
            class="inline-block text-sm md:text-base pb-4
            {{ Route::currentRouteName() == 'bycountry.show' ? ' border-b-[3px] border-[#010414] font-extrabold' : '' }}">
            {{ __('texts.by_country') }}
        </a>
    </div>
</div>
