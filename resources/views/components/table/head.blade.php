@props(['neworder'])
<thead class="bg-[#F6F6F7] divide-y flex flex-col  w-full divide-gray-200">
    <tr class="grid grid-cols-4 ">
        <th scope="col"
            class="flex md:gap-2 gap-0 justify-start items-center py-3.5 pl-4 pr-3 text-left text-xs sm:text-sm font-semibold text-gray-900 sm:pl-6">
            <a
                href="{{ route('bycountry.show', 'column=name&order=' . $neworder . '&search=' . request('search')) }}">{{ __('texts.location') }}</a>
            <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 justify-start items-center md:px-1 px-3 py-3.5 text-left text-xs sm:text-sm font-semibold whitespace-nowrap text-gray-900">
            <a
                href="{{ route('bycountry.show', 'column=confirmed&order=' . $neworder . '&search=' . request('search')) }}">{{ __('texts.new_cases') }}</a>
            <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 justify-start items-center md:px-1 px-3 py-3.5 text-left text-xs sm:text-sm font-semibold text-gray-900">
            <a
                href="{{ route('bycountry.show', 'column=recovered&order=' . $neworder . '&search=' . request('search')) }}">{{ __('texts.recovered') }}</a>
            <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 justify-start items-center md:px-1 px-3 py-3.5 text-left text-xs sm:text-sm font-semibold text-gray-900">
            <a
                href="{{ route('bycountry.show', 'column=deaths&order=' . $neworder . '&search=' . request('search')) }}">{{ __('texts.death') }}</a>
            <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>

    </tr>
</thead>
