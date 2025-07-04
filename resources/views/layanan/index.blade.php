@extends('layouts.app')

@section('title', 'Data Layanan')

@section('content')
    <h2>Data Layanan</h2>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    @if (session('success'))
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
            @foreach ($data as $l)
                <tr>
                    <td>{{ $l->nama_layanan }}</td>
                    <td>Rp{{ number_format($l->harga, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('layanan.destroy', $l->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
