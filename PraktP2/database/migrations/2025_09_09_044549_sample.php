<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('Mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('NPM');
            $table->timestamps();
            $table->string('gender');
        });

    }

   
    public function down(): void
    {
        Schema::dropIfExists('Mahasiswa');
       
    }
};
