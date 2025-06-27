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
        $data = Layanan::findOrFail($id);
        return view('layanan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required|numeric',
        ]);

        $data = Layanan::findOrFail($id);
        $data->update($request->all());

        return redirect('/layanan')->with('success', 'Data layanan berhasil diupdate!');
    }

    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return redirect('/layanan')->with('success', 'Data layanan berhasil dihapus!');
    }
}
