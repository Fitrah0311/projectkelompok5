<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data = Layanan::all();
        return view('layanan.index', compact('data'));
    }

    public function create()
    {
        return view('layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required|numeric',
        ]);

        Layanan::create($request->all());

        return redirect('/layanan')->with('success', 'Data layanan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->update($validated);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui!');
    }


    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return redirect('/layanan')->with('success', 'Data layanan berhasil dihapus!');
    }
}
