<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan',function(Blueprint $manada){
            $manada->integer('id pengaduan')->primary();
            $manada->date('tanggal pengaduan');
            $manada->char('nik', 11);
            $manada->text('isi laporan');
            $manada->string('foto', 225);
            $manada->enum('status', ['Proses','Selesai']);
            $manada->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');
    }
};
