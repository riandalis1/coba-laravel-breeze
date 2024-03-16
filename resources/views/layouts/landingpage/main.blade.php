<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Try Breeze</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="min-h-screen bg-gray-200 justify-center flex flex-col">
    @include('layouts.landingpage.partials.navbar')

    <div class="relative isolate px-6 pt-14 overflow-hidden flex-1">
        @include('layouts.landingpage.partials.blobtop')
        <div class="mt-10">
            @yield('container')
        </div>
        @include('layouts.landingpage.partials.blobbot')
    </div>

    @include('layouts.landingpage.partials.footer')
</body>

</html>
