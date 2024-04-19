<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">
    <title>
        {{ config('app.name') }} by  {{ config('app.creator') }}
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}?v=1" rel="stylesheet" /> --}}
    <link id="pagestyle" href="{{ asset('guest/assets/css/soft-design-system.css') }}?v=1.0.9" rel="stylesheet" />
    <!-- Alpine -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    
    @livewireStyles

</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}

    {{-- Toast Message --}}
    @session('toast-success')
        <x-toast.success :message="session('toast-success')" />
    @endsession

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>
    @session('toast-success')
        <script>
            var myToastEl = document.getElementById('toastSuccess');
            var myToast = new bootstrap.Toast(myToastEl); // Returns a Bootstrap toast instance
            myToast.show();
        </script>
    @endsession

    @stack('footer-scripts')

    @livewireScripts
</body>

</html>
