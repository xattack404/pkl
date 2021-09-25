<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_web', 20);
            $table->text('logo');
            $table->string('deskripsi', 150);
            $table->string('email');
            $table->string('no_telp', 15);
            $table->string('alamat', 80);
            $table->string('link_map', 50);
            $table->string('link_twitter', 50);
            $table->string('link_facebook', 50);
            $table->string('link_ig', 50);
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
        Schema::dropIfExists('pengaturan');
    }
}
