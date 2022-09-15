<x-layout>
    <x-slot name="header">
        <div class="h-screen w-full relative grid grid-rows-2 grid-cols-1">
            <div class="mt-10 mb-14 relative justify-self-center self-start">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div
                class="relative flex flex-col bottom-56 w-full items-center justify-self-center self-start justify-center">
                <h1 class="text-2xl font-black mb-10">{{ __('texts.reset_password') }}</h1>
                <form action="{{ route('reset_password.update') }}" method="POST" class="relative w-[90%] md:w-96">
                    @csrf
                    <input name="token" class="hidden" value="{{ $token }}">
                    <div>
                        <x-form.password-input />
                    </div>
                    <div class="mt-6 mb-14">
                        <x-form.repeat-password-input />
                    </div>
                    <x-form.button name='save_changes' class=" w-full md:w-96" />
                    @error('error')
                        {{ $message }}
                    @enderror

                </form>
            </div>
    </x-slot>

</x-layout>
