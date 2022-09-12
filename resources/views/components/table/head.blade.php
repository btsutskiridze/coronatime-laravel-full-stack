<thead class="bg-[#F6F6F7] divide-y flex flex-col  w-full divide-gray-200">
    <tr class="grid grid-cols-4 ">
        <th scope="col"
            class="flex md:gap-2 gap-0 justify-start items-center py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
            @sortablelink('id', trans('texts.location'))
            <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-gray-900">
            @sortablelink('confirmed', trans('texts.new_cases'))<img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
            @sortablelink('recovered', trans('texts.recovered'))<img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>
        <th scope="col"
            class="flex md:gap-2 gap-0 md:px-1 px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
            @sortablelink('deaths', trans('texts.death')) <img src="{{ asset('/images/change-arrows.svg') }}" class="w-[15px]" alt="change-arrow">
        </th>

    </tr>
</thead>
