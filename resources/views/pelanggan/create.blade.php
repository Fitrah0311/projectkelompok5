@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label>Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
