<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Web Lanjut - Unila' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ===== Layout dasar ===== */
        html, body {
            height: 100%;
            margin: 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #e3f2fd 100%);
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        /* ===== Navbar ===== */
        .navbar-custom {
            background-color: #1e88e5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }

        .nav-link {
            color: #fff !important;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            color: #bbdefb !important;
        }

        /* ===== Footer ===== */
        footer {
            background-color: #1565c0;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Isi konten --}}
    <main class="container my-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
