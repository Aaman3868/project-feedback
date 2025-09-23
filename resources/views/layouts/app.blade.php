<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
            padding-top: 1rem;
        }

        .sidebar a {
            color: #ddd;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a.active, .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        /* Content wrapper */
        .content-wrapper {
            padding: 1.5rem;
        }

        /* Make sidebar fixed on desktop only */
        @media(min-width: 992px) {
            .sidebar {
                position: fixed;
                top: 56px; /* navbar height */
                left: 0;
                width: 220px;
            }

            .content-wrapper {
                margin-left: 220px;
                margin-top: 56px;
            }
        }

        /* Collapse sidebar on mobile */
        @media(max-width: 991.98px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .content-wrapper {
                margin: 0;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    @include('layouts.navigation')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-lg-2 d-none d-lg-block sidebar">
                @include('layouts.sidebar')
            </nav>

            <!-- Main content -->
            <main class="col-12 col-lg-10 ms-lg-auto content-wrapper">
                @hasSection('header')
                    <div class="bg-white shadow-sm rounded p-3 mb-3">
                        @yield('header')
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
