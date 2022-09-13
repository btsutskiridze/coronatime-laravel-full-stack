<x-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-statistics.nav />
    <x-statistics.worldwide confirmed="{{ $confirmed }}" recovered="{{ $recovered }}"
        deaths="{{ $deaths }}" />
</x-layout>
