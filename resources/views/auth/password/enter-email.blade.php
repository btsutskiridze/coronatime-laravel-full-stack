<x-layout>
    <x-slot name="header">
        <div class="h-screen w-full relative grid grid-rows-2 grid-cols-1">
            <div class="mt-10 mb-14 relative justify-self-center self-start">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div
                class="relative flex flex-col bottom-56 w-full sm:w-96 items-center justify-self-center self-start justify-center">
                <h1 class="text-2xl font-black">{{ __('texts.reset_password') }}</h1>
                <form action="{{ route('forgot_password.sent_email') }}" class="w-[90%] md:w-96" method="POST"
                    class="relative">
                    @csrf
                    <div class="my-14">
                        <x-form.input name="email" type="email" placeholder="enter_your_email" />
                    </div>
                    <x-form.button name='reset_password' class="w-full md:w-96" />
                </form>
            </div>
        </div>
    </x-slot>

</x-layout>
