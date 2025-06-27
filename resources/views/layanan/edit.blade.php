@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Layanan</h1>

    <form action="{{ route('layanan.update', $data->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama_layanan" class="form-control" value="{{ $data->nama_layanan }}">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $data->harga }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
