<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Station</title>
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container pt-4">

        @include('shared.header')
        <main>
            @yield('main')
        </main>
        @include('shared.footer')
    </div>

</body>

</html>
