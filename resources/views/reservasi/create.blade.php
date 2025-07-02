@extends('layouts.app')

@section('title', 'Tambah Reservasi')

@section('content')
    <h2>Tambah Reservasi</h2>

    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Layanan</label>
            <input type="text" name="layanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
