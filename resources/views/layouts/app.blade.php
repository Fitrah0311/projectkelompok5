<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'YAMAHAL')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: rgb(237, 51, 153);
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        .nav-link i {
            margin-right: 6px;
        }
        .btn-light {
            border-radius: 20px;
        }
        .btn-warning {
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #f33687;">
        <div class="container d-flex align-items-center justify-content-between">

            {{-- Kiri: Logo + Profil --}}
            <div class="d-flex align-items-center gap-2">
                <a class="navbar-brand text-white fw-bold" href="#">🦄 YAMAHAL</a>

                @auth
                    <div class="d-flex align-items-center bg-white rounded-pill px-3 py-1">
                        <span class="me-2">👤 {{ Auth::user()->name }}</span>
                        <img src="https://via.placeholder.com/32" alt="avatar" class="rounded-circle" width="32" height="32">
                    </div>
                @endauth
            </div>

            {{-- Kanan: Menu Navigasi --}}
            <div class="d-flex gap-2">
                <a href="{{ route('pelanggan.index') }}" class="btn btn-light">👥 Pelanggan</a>
                <a href="{{ route('layanan.index') }}" class="btn btn-light">🛠️ Layanan</a>
                <a href="{{ route('reservasi.index') }}" class="btn btn-light">📅 Reservasi</a>
                
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-warning">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
