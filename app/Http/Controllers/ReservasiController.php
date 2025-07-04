<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Pelanggan;
use App\Models\Layanan;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $data = Reservasi::with(['pelanggan', 'layanan'])->get();
        return view('reservasi.index', compact('data'));
    }


    public function create()
    {
    $pelanggans = Pelanggan::all();
    $layanans = Layanan::all();

    return view('reservasi.create', compact('pelanggans', 'layanans'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'layanan_id' => 'required|exists:layanans,id',
            'tanggal' => 'required|date',
            'jam' => 'required',
        ]);

        Reservasi::create($validated);
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $pelanggans = Pelanggan::all();
        $layanans = Layanan::all();
        return view('reservasi.edit', compact('reservasi', 'pelanggans', 'layanans'));
    }


    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Reservasi::findOrFail($id)->delete();
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }
}
