<x-layout>
    <x-slot name="header">
        <div class="h-screen w-full relative grid grid-rows-2 grid-cols-1">
            <div class="mt-10 mb-14 relative justify-self-center self-start">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div class="relative flex flex-col bottom-20 items-center justify-self-center self-start justify-center">
                <img src="{{ asset('images/checked.svg') }}" alt="checked">
                <p class="text-lg text-[#010414] text-center mt-4">
                    We have sent you a confirmation email
                </p>
            </div>
        </div>
    </x-slot>

</x-layout>
