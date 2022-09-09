<section class="mt-6 lg:my-10 grid lg:grid-flow-col ">
    <div
        class="h-52 lg:h-64 bg-[#2029F3] bg-opacity-[0.08]  col-span-2 lg:col-span-1 rounded-2xl 
    flex justify-center items-center flex-col">

        <img src="{{ asset('/images/new-cases.svg') }}" alt="">
        <h1 class="font-medium text-base sm:text-xl my-4  sm:mt-6 sm:mb-4">{{ __('texts.new_cases') }}</h1>

        <h1 class=" font-black leading-[30px] sm:leading-[47px] text-[#2029F3] text-[25px] sm:text-[39px]">715,523
        </h1>

    </div>
    <div
        class="h-52 lg:h-64 bg-[#249E2C]  bg-opacity-[0.08]  my-4 lg:my-0 lg:mx-4 mr-4 flex-shrink rounded-2xl
    flex justify-center items-center flex-col">
        <img src="{{ asset('/images/recovered.svg') }}" alt="">
        <h1 class="font-medium text-base sm:text-xl my-4  sm:mt-6 sm:mb-4">{{ __('texts.recovered') }}</h1>

        <h1 class=" font-black leading-[30px] sm:leading-[47px] text-[#249E2C] text-[25px] sm:text-[39px]">715,523
        </h1>
    </div>
    <div
        class="h-52 lg:h-64 bg-[#EAD621]  bg-opacity-[0.08]  my-4 lg:my-0 flex-shrink rounded-2xl
    flex justify-center items-center flex-col ">
        <img src="{{ asset('/images/death.svg') }}" alt="">
        <h1 class="font-medium  text-base sm:text-xl my-4  sm:mt-6 sm:mb-4">{{ __('texts.death') }}</h1>
        <h1 class=" font-black leading-[30px] sm:leading-[47px] text-[#EAD621] text-[25px] sm:text-[39px]">715,523
        </h1>
    </div>
</section>
