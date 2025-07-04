@extends('layouts.app')

@section('title', 'Tambah Reservasi')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Reservasi</h2>

    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="pelanggan_id" class="form-label">Pelanggan</label>
            <select name="pelanggan_id" class="form-select" required>
                @foreach ($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="layanan_id" class="form-label">Layanan</label>
            <select name="layanan_id" class="form-select" required>
                @foreach ($layanans as $layanan)
                    <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" name="jam" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
