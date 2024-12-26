<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>

<body>
    {{-- Header part --}}
    @include('dashboard')

    @section('content')

    @show

    {{-- Footer  --}}
    @include('home.footer')
</body>

</html>
