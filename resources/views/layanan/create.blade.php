@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Layanan</h1>

    <form action="{{ route('layanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
