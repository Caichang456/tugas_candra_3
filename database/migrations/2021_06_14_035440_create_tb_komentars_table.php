<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_komentars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_status')->unsigned();
            $table->string('nama_komentar');
            $table->string('isi_komentar');
            $table->foreign('id_status')->references('id')->on('tb_statuses')->onDelete('cascade');
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
        Schema::dropIfExists('tb_komentars');
    }
}
