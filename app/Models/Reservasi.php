<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{

    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained()->onDelete('cascade');
            $table->foreignId('layanan_id')->constrained()->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', ['pending', 'selesai', 'batal'])->default('pending');
            $table->timestamps();
        });
    }

}
