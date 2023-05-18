<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('Nim',15)->primary();
            $table->string('Nama',25);
            $table->string('Kelas',10);
            $table->string('Jurusan',30);
            $table->string('No_Handphone',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
