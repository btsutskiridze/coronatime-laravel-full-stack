<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full ">

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

<body {{ $attributes(['class' => 'h-screen font-inter']) }}>
    {{ $header }}

    <div class="lg:w-4/5 mx-auto  px-4">
        {{ $slot }}
    </div>
</body>

</html>
