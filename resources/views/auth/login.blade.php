@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
    body {
        background-color: #f2f2f2;
    }
    .centered-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }
</style>

<div class="container centered-container">
    <form method="POST" action="{{ route('login') }}">
        <h2 class="text-center mb-4">Login</h2>
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control bg-light" required autofocus>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control bg-light" required>
        </div>
        <button class="btn btn-primary w-100">Login</button>
        <p class="mt-3 text-center">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
        </p>
    </form>
</div>
@endsection
