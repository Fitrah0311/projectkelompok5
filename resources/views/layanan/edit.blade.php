@extends('layouts.app')

@section('title', 'Edit Layanan')

@section('content')
    <h2>Edit Layanan</h2>

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control" value="{{ $layanan->nama_layanan }}" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $layanan->harga }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
