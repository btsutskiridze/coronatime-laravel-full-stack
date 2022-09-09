<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corona time</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="http://fonts.cdnfonts.com/css/inter" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body {{ $attributes(['class' => 'h-full w-full lg:w-full sm:w-4/5 mx-auto font-inter']) }}>
    <div class="flex min-h-full">
        <div
            class="flex flex-1 flex-col self-start justify-center lg:w-[60%]  py-0 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-28">
            <div class="w-full ">
                <div class="mt-10 mb-14">
                    <img src="/images/logo.svg" alt="">
                </div>
                {{ $slot }}

            </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block lg:w-1/3">
            <img class="absolute inset-0 h-full w-full object-cover" src="/images/covid.png" alt="">
        </div>
    </div>
</body>

</html>
