@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Layanan</h1>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $l)
            <tr>
                <td>{{ $l->nama_layanan }}</td>
                <td>Rp {{ number_format($l->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('layanan.destroy', $l->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
