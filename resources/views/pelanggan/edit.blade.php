@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $data->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
        </div>
        <div class="mb-3">
            <label>Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" value="{{ $data->plat_nomor }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
