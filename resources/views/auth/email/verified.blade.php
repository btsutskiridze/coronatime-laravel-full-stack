<x-layout>
    <x-slot name="header">
        <div class="h-screen w-full relative grid grid-rows-2 grid-cols-1">
            <div class="mt-10 mb-14 relative justify-self-center self-start">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div class="w-[90%] mx-auto ">
                <div class="relative flex flex-col bottom-20 items-center justify-self-center self-start justify-center">
                    <img src="{{ asset('images/checked.svg') }}" alt="checked">
                    <p class="text-lg text-[#010414] text-center mt-4">
                        Your account is confirmed, you can sign in
                    </p>

                    <div class="w-[100%] md:w-96 mt-16">
                        <a href="{{ route('worldwide.show') }}">
                            <button
                                class="flex w-full justify-center sm:w-96 mx-auto rounded-lg border border-transparent
                                        bg-[#0FBA68] py-[1.14rem] px-4 mb-6 md:text-base text-sm font-black 
                                        uppercase text-white shadow-sm hover:bg-green-600">
                                Sign Up
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>

</x-layout>
