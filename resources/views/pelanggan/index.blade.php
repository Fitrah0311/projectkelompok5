<!-- resources/views/pelanggan/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Pelanggan</h1>
    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Plat Nomor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->plat_nomor }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" style="display:inline-block;">
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
