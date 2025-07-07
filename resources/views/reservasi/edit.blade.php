@extends('layouts.app')

@section('title', 'Edit Reservasi')

@section('content')
    <h2>Edit Reservasi</h2>

    <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Pilih Nama Pelanggan --}}
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <select name="pelanggan_id" class="form-control" required>
                @foreach($pelanggans as $p)
                    <option value="{{ $p->id }}" {{ $reservasi->pelanggan_id == $p->id ? 'selected' : '' }}>
                        {{ $p->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Layanan --}}
        <div class="mb-3">
            <label>Layanan</label>
            <select name="layanan_id" class="form-control" required>
                @foreach($layanans as $l)
                    <option value="{{ $l->id }}" {{ $reservasi->layanan_id == $l->id ? 'selected' : '' }}>
                        {{ $l->nama_layanan }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tanggal --}}
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $reservasi->tanggal }}" required>
        </div>

        {{-- Jam --}}
        <div class="mb-3">
            <label>Jam</label>
            <input type="time" name="jam" class="form-control" value="{{ $reservasi->jam }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
