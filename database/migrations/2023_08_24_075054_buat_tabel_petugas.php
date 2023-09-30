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
        Schema::create('petugas', function(Blueprint $din){
            $din->integer('id petugas')->primary();
            $din->string('nama petugas',35);
            $din->string('username', 25);
            $din->string('password',32);
            $din->string('telp',13);
            $din->enum('level', ['admin','petugas']);
            $din->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');
    }
};
