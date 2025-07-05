<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
=======
    
>>>>>>> 2d66aa3953b3bfff6fed3f9021229cdb41529037
    public function up(): void
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('pelanggan_id')->constrained()->onDelete('cascade');
            $table->foreignId('layanan_id')->constrained()->onDelete('cascade');
=======
            $table->foreignld('pelanggan_id')->constrained()->onDelete('cascade');
            $table->foreignld('layanan_id')->constrained()->onDelete('cascade');
>>>>>>> 2d66aa3953b3bfff6fed3f9021229cdb41529037
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', ['pending', 'selesai', 'batal'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
