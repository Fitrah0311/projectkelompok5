@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<style>
    .hero {
        background: linear-gradient(to right, #ff7eb3, #ff758c);
        color: white;
        padding: 100px 30px;
        border-radius: 12px;
        text-align: center;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .hero p {
        font-size: 1.2rem;
        margin-top: 10px;
    }

    .btn-start {
        margin-top: 30px;
    }
</style>

<div class="hero">
    <h1>Selamat Datang di YAMAHAL 🤖</h1>
    <p>Aplikasi reservasi servis bengkel motor dan kendaraan kesayanganmu!</p>
    <a href="{{ route('pelanggan.index') }}" class="btn btn-light btn-lg btn-start">Mulai Sekarang 🚀</a>
</div>
@endsection
