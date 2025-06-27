<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'plat_nomor' => 'required',
        ]);

        Pelanggan::create($request->all());

        return redirect('/pelanggan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'plat_nomor' => 'required',
        ]);

        $data = Pelanggan::findOrFail($id);
        $data->update($request->all());

        return redirect('/pelanggan')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        Pelanggan::findOrFail($id)->delete();
        return redirect('/pelanggan')->with('success', 'Data berhasil dihapus!');
    }
}
