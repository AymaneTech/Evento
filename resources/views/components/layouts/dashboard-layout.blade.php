@props(["breadcrumb"])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Evento</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="/assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <link href="/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet"/>
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
<div class="absolute w-full bg-blue-500 min-h-75"></div>
@include('partials.side-bar')

<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    @include('partials.dashboard-header')
    <div class="w-full px-6 py-6 mx-auto">
        {{ $slot }}
        <x-flash/>
        @include('partials.dashboard-footer')
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
