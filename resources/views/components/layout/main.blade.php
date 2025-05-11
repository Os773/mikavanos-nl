<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>
<body class="bg-blue-950 text-white">
<x-layout.header/>
<main class="m-2">
{{ $slot }}
</main>
<x-layout.footer/>
</body>
</html>
