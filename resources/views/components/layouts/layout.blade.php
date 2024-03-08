<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Alfurma" />
    <meta name="description" content="Alfurma" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Evento </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    @include('partials.header')
    {{ $slot }}
    @include('partials.footer')
    <x-flash />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
