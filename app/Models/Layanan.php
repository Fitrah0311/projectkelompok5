<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{

    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

}
