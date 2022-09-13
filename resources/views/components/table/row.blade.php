@props(['name', 'confirmed', 'recovered', 'deaths'])
<tr class="grid grid-cols-4">
    <td class=" py-4 pl-4 pr-3 text-xs sm:text-sm font-normal text-[#010414] sm:pl-6">
        {{ $name }}
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs sm:text-sm font-normal text-[#010414] ">
        {{ $confirmed }}
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs sm:text-sm font-normal text-[#010414] ">
        {{ $recovered }}
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs sm:text-sm font-normal text-[#010414] ">
        {{ $deaths }}
    </td>
</tr>
