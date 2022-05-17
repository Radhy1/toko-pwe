<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemanajemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memanajemen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pustakawan_id')->constrained('pustakawan');
            $table->foreignId('buku_id')->constrained('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memanajemen');
    }
}
