@extends('layouts.app')

@section('title', 'Register')

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
    <form method="POST" action="{{ route('register') }}">
        <h2 class="text-center mb-4">Register</h2>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control bg-light" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control bg-light" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control bg-light" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Daftar</button>
        <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>
@endsection
