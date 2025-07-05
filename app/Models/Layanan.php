<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_layanan', 'harga'];


    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });

        Layanan::create($request->all());
            $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        Layanan::create($request->only(['nama_layanan', 'harga']));
    }

}