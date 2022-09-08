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
                            <thead class="bg-[#F6F6F7] divide-y flex flex-col  w-full divide-gray-200">
                                <tr class="grid grid-cols-4 ">
                                    <th scope="col"
                                        class="flex md:gap-2 gap-0 justify-start items-center py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        {{ __('texts.location') }} <img src="/images/change-arrows.svg" class="w-[15px]"
                                            alt="">
                                    </th>
                                    <th scope="col"
                                        class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-gray-900">
                                        {{ __('texts.new_cases') }}<img src="/images/change-arrows.svg" class="w-[15px]"
                                            alt="">
                                    </th>
                                    <th scope="col"
                                        class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('texts.recovered') }}<img src="/images/change-arrows.svg" class="w-[15px]"
                                            alt="">
                                    </th>
                                    <th scope="col"
                                        class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('texts.death') }} <img src="/images/change-arrows.svg" class="w-[15px]"
                                            alt=""></th>

                                </tr>
                            </thead>
                            <tbody
                                class="divide-y h-[38rem] flex flex-col overflow-y-scroll w-full divide-gray-100 bg-white">

                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-[#010414] sm:pl-6">
                                        Worldwide</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                                <tr class="grid grid-cols-4">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-normal text-gray-900 sm:pl-6">
                                        Georgia</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        9,704,000
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        66,591</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm font-normal text-[#010414] ">
                                        5,803,905</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
