<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>product crud practice</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/backend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/backend/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>


    @include('layouts.backend.navbar')



        @include('layouts.backend.sidebar')


    <main id="main" class="main">

        @yield('content')

    </main>

    @include('layouts.backend.footer')

    

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/backend/assets/js/main.js') }}"></script>





    @yield('script')
</body>

</html>
