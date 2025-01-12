<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
</head>
<body>

    <div>
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Heading (Optional) -->
        @if (isset($header))
            <header>
                <div class="container py-4">
                    <h1>{{ $header }}</h1>
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2025 BlogApp. All rights reserved.</p>
    </footer>

</body>
</html>
