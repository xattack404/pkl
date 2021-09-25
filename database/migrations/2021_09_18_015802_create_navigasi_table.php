<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_navigasi', 15);
            $table->string('link');
            $table->string('judul_konten', 30);
            $table->longText('isi_konten');
            $table->text('gambar');
            $table->foreignId('kategori_id')->index();
            $table->boolean('aktif', 2);
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
        Schema::dropIfExists('navigasi');
    }
}
