<x-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-statistics.nav />
    <div class="pb-14 w-full">
        <x-search />

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="">

            <div class="flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow  md:rounded-lg"
                            style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.04)">
                            <table class="min-w-full ">
                                <x-table.head />
                                <tbody
                                    class="divide-y max-h-[38rem] flex flex-col overflow-y-auto w-full divide-gray-100 bg-white">

                                    {{-- <tr class="grid grid-cols-4">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-[#010414] sm:pl-6">
                                            {{ $worldwide['name'] }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                            {{ $worldwide['confirmed'] }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                            {{ $worldwide['recovered'] }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                            {{ $worldwide['deaths'] }}
                                        </td>
                                    </tr> --}}
                                    @if ($countries->isNotEmpty())

                                        @foreach ($countries as $country)
                                            <x-table.row name="{{ $country['name'] }}"
                                                confirmed="{{ $country['confirmed'] }}"
                                                recovered="{{ $country['recovered'] }}"
                                                deaths="{{ $country['deaths'] }}" />
                                        @endforeach
                                    @else
                                        <tr>
                                            <td align="center"
                                                class="text-red-600 flex justify-center py-2 text-lg"colspan="3">
                                                {{ __('texts.nothing_was_found') }}
                                            </td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
