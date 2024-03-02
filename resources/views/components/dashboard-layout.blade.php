
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <title>Evento</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 min-h-75"></div>
    @include('partials.side-bar')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      @include('partials.dashboard-header')
      <div class="w-full px-6 py-6 mx-auto">

      {{ $slot }}
      @include('partials.dashboard-footer')
      </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
  <!-- plugin for scrollbar  -->
  <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>
