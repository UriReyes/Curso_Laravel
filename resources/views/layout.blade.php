<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-success')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-white text-black-50 py-3 text-center shadow">
            {{ config('app.name') }} &copy; - {{ date('Y') }}
        </footer>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
