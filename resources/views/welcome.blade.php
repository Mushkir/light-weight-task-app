<!DOCTYPE html>
<html>

<head>
    <title>Task Tracker</title>
</head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <div class="text-black/50 bg-gray-900">

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-white selection:text-[#FF2D20]">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                @include('home.header')

                @section('main-content')

                @show

                @include('home.footer')
            </div>
        </div>
    </div>
</body>

</html>
