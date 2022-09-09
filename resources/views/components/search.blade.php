<form class="md:w-60 w-full py-10">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
    <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-6 pointer-events-none">
            <img src="{{ asset('/images/search.svg') }}" alt="search-icon">
        </div>
        <input type="search" id="default-search"
            class="block p-4 pl-14 w-full text-sm text-gray-900 bg-transparent focus:outline-gray-100 focus:outline-1 rounded-lg md:border border-gray-300 "
            placeholder="Search by country" required>
        {{-- <button type="submit"
            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> --}}
    </div>
</form>
