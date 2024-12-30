<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
</head>
<body>
    <header>
        <!-- Include the header here -->
        @include('body.header.menu')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Include the footer here -->
        {{-- @include('body.footer') --}}
    </footer>
</body>
</html>