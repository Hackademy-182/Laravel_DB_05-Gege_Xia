<!doctype html>
<html>

<head>
    <meta charset="utf-8">@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
    @include('layouts.navbar')
    <main class="container py-4">@yield('content')</main>
</body>

</html>
