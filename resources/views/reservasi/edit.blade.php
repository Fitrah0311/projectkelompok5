@extends('layouts.app')

@section('title', 'Edit Reservasi')

@section('content')
    <h2>Edit Reservasi</h2>

    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="{{ $reservasi->nama_pelanggan }}" required>
        </div>
        <div class="mb-3">
            <label>Layanan</label>
            <input type="text" name="layanan" class="form-control" value="{{ $reservasi->layanan }}" required>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $reservasi->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label>Jam</label>
            <input type="time" name="jam" class="form-control" value="{{ $reservasi->jam }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
