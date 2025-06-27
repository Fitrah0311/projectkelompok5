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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="/">🦄 YAMAHAL 🤖</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/pelanggan">👤 Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/layanan">🛠️ Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reservasi">📅 Reservasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        @yield('content')
    </main>
</body>
</html>
