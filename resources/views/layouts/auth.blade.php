<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <title>Soft UI Dashboard Tailwind</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

    <!-- Navbar -->
    <nav class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
      <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
        <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0" href="../pages/dashboard.html"> Soft UI Dashboard </a>
        <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
            <span bar1 class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar2 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar3 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          </span>
        </button>
      </div>
    </nav>

    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        @yield('content')
    </main>
  </body>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- main script file  -->
  <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>
</html>