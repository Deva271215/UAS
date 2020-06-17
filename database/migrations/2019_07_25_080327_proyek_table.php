<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cr');
            $table->text('gambar');
            $table->text('nama_proyek');
            $table->text('dana_dibutuhkan');
            $table->text('dana_terkumpul');
            $table->text('persentase');
            $table->text('roi');
            $table->text('durasi');
            $table->string('penerima');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
