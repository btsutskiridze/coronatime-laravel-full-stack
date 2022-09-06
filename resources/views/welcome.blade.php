<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="h-screen md:w-4/5 mx-auto">

    <header class="">
        {{-- nav pc --}}
        <nav class="bg-white mx- px-2 sm:px-4 py-4  ">
            <div class="container flex flex-row justify-between items-center mx-auto">
                <a href="#" class="flex items-center">
                    <img src="/images/logo.svg" class="mr-3 " alt="Flowbite Logo">
                </a>
                <div
                    class="flex flex-row items-center gap-10 text-xl  {{ app()->currentLocale() == 'en' ? 'md:text-base' : 'md:text-sm' }}">
                    <ul x-data="{ open: false }" class="z-50" @click.away="open = false">
                        @php
                            $optionOne = 'English';
                            $optionTwo = 'Georgian';
                            $selected = $optionOne;
                        @endphp
                        <button @click="open = !open" class="flex flex-row items-center">
                            <li class="font-medium py-2 pl-2">
                                {{ app()->currentLocale() == 'en' ? 'English' : 'ქართული' }}
                            </li>
                            <img src="/images/arrow.svg" alt="">
                        </button>
                        <a href="{{ route('language.change', app()->currentLocale() == 'en' ? 'ka' : 'en') }}"
                            x-show="open" style="display: none" @click="open = false"
                            class="absolute block p-2 mt-2 rounded-lg bg-gray-100">
                            {{ app()->currentLocale() == 'en' ? 'Georgian' : 'ინგლისური' }}
                        </a>

                    </ul>
                    <button class="p-2 md:hidden ">
                        <img src="/images/burger-menu.svg" class="" id="burger-menu" alt="">
                    </button>
                    <div class=" hidden flex-row items-center gap-8 md:flex ">
                        <a href="#" class="font-bold">Bakari Ts.</a>
                        <a href="#" class="border-l-2 border-gray-200 pl-4 font-medium text-sm">Log Out</a>
                    </div>
                </div>

            </div>
        </nav>
        <nav>
            <div id="nav-menu" class="fixed w-screen md:hidden hidden text-center text-lg">
                <ul class="p-3  mx-3 rounded-lg bg-green-50 box-border ">
                    <a href="#" class="font-bold p-2 hover:bg-green-100 rounded-lg block">Bakari Ts.</a>
                    <a href="#" class="font-medium p-2 hover:bg-green-100 rounded-lg block">Log out</a>
                </ul>
            </div>
            <script>
                const button = document.getElementById('burger-menu');
                const navMenu = document.getElementById('nav-menu');
                button.addEventListener('click', () => {
                    navMenu.classList.toggle('block');
                    navMenu.classList.toggle('hidden');
                });
            </script>
        </nav>
    </header>

</body>

</html>
