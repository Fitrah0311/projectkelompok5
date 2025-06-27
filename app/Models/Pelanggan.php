<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Pelanggan extends Model
{
    protected $fillable = ['nama', 'no_hp', 'plat_nomor'];


    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('plat_nomor');
            $table->timestamps();
        });

        Pelanggan::create($request->all());
            $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string',
            'plat_nomor' => 'required|string',
        ]);

        Pelanggan::create($request->only(['nama', 'no_hp', 'plat_nomor']));
    }


}
