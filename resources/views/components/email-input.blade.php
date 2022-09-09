<form>
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
    <div class="relative">
        <div class="flex absolute inset-y-0 left-7 items-center pointer-events-none">
            <img src="{{ asset('/images/search.svg') }}" alt="search-icon">
        </div>
        <input type="email" id="default-search"
            class="block py-5 pl-16 w-full md:w-[424px] text-sm text-gray-900 bg-gray-50 rounded-[32px] border focus:outline-none border-gray-300 "
            placeholder="{{ __('texts.enter_your_email') }}" required="">
        <button type="submit"
            class="text-white absolute right-2.5 bottom-[7px] bg-[#0FBA68] font-black uppercase rounded-[27px] leading-[16px] text-sm px-8 py-4 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('texts.send') }}</button>
    </div>
</form>
