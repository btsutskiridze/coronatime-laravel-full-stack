<x-layout>
    <x-slot name="header">
        <div class="h-screen w-full relative grid grid-rows-2 grid-cols-1">
            <div class="mt-10 mb-14 relative justify-self-center self-start">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div class="relative flex flex-col bottom-20 items-center justify-self-center self-start justify-center">
                <img src="{{ asset('images/checked.svg') }}" alt="checked">
                <p class="text-lg text-[#010414] text-center mt-4">
                    Your password has been updeted successfully
                </p>

                <div class="w-96 mt-16">
                    <a href="{{ route('login.show') }}">
                        <button
                            class="flex w-full justify-center rounded-lg border border-transparent
                                        bg-[#0FBA68] py-[1.14rem] px-4 mb-6 md:text-base text-sm font-black 
                                        uppercase text-white shadow-sm hover:bg-green-600">
                            {{ __('texts.sign_in') }}
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </x-slot>

</x-layout>
