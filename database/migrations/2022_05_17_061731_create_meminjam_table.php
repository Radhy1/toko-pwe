<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meminjam', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('buku');
            $table->foreignId('pengunjung_id')->constrained('pengunjung');
            $table->string('nama_buku', 100);
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meminjam');
    }
}
