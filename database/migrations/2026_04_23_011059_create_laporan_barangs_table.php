<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_barang', function (Blueprint $table) {
            $table->id('laporan_id');
            $table->foreignId('user_id')
                ->constrained('users', 'user_id')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->enum('jenis_laporan', ['Kehilangan', 'Temuan']);
            $table->string('nama_barang');
            $table->text('deskripsi')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('tanggal_kejadian');
            $table->date('tanggal_penyelesaian')->nullable();
            $table->enum('status_laporan', ['Mencari', 'Tersimpan', 'Dikembalikan', 'Rejected'])
                ->default('Mencari');
            $table->string('img_path');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('klaim_kepemilikan');
        Schema::dropIfExists('laporan_barang');
        Schema::enableForeignKeyConstraints();
    }
};
