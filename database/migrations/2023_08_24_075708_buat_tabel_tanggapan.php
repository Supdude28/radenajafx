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
        Schema::create('tanggapan', function(Blueprint $tatang){
            $tatang->integer('id tanggapan')->primary();
            $tatang->integer('id pengaduan');
            $tatang->date('tanggal tanggapan');
            $tatang->text('tanggapan');
            $tatang->integer('id petugas');
            $tatang->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};
