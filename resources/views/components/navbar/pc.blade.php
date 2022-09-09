{{-- nav pc --}}
<nav class="bg-white px-4 py-4  ">
    <div class="flex flex-row justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <img src="/images/logo.svg" class="mr-3 " alt="Flowbite Logo">
        </a>
        @auth
            <div class="flex flex-row items-center gap-2 md:gap-10 text-base">

                <ul x-data="{ open: false }"
                    class="z-50 {{ app()->currentLocale() == 'en' ? 'md:text-base text-lg' : 'md:text-sm' }}"
                    @click.away="open = false">

                    <button @click="open = !open" class="flex flex-row items-center">
                        <li class="font-medium py-2 pl-2">
                            {{ app()->currentLocale() == 'en' ? 'English' : 'ქართული' }}
                        </li>
                        <img src="/images/arrow.svg" alt="">
                    </button>

                    <a href="{{ route('language.change', app()->currentLocale() == 'en' ? 'ka' : 'en') }}" x-show="open"
                        style="display: none" @click="open = false" class="absolute block p-2 mt-2 rounded-lg bg-gray-100">
                        {{ app()->currentLocale() == 'en' ? 'Georgian' : 'ინგლისური' }}
                    </a>

                </ul>

                <button class="p-2 md:hidden w-10 h-10 ">
                    <img src="/images/burger-menu.svg" class="" id="burger-menu" @click='show=!show' alt="">
                </button>

                <div class=" hidden flex-row items-center gap-8 md:flex ">
                    <a href="#" class="font-bold">Bakari Ts.</a>
                    <a href="#"
                        class="border-l-2 border-gray-200 pl-4 font-medium text-sm">{{ __('texts.log_out') }}</a>
                </div>

            </div>

        @endauth

    </div>
</nav>
