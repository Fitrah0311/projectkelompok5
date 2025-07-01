<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $data = Reservasi::all();
        return view('reservasi.index', compact('data));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            $table->foreignId('pelanggan_id')->constrained()->onDelete('cascade');
            $table->foreignId('layanan_id')->constrained()->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', ['pending', 'selesai', 'batal'])->default('pending');
        });
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
