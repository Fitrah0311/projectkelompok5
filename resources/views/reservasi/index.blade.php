@extends('layouts.app')

@section('title', 'Data Reservasi')

@section('content')
    <h2>Data Reservasi</h2>
    <a href="{{ route('reservasi.create') }}" class="btn btn-primary mb-3">+ Tambah Reservasi</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Layanan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $r)
                <tr>
                    <td>{{ $r->nama_pelanggan }}</td>
                    <td>{{ $r->layanan }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>
                        <a href="{{ route('reservasi.edit', $r->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('reservasi.destroy', $r->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
