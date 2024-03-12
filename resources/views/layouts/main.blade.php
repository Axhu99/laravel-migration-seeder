<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NANE') }} @yield('title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    @include('includes.header')
    {{-- MAIN --}}
    <main class="container my-4">
        @yield('main-content')
    </main>

    {{-- FOOTER --}}
</body>

</html>
