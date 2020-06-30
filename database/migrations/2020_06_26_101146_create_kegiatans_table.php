<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket');
            $table->integer('nopelanggan')->nullable();
            $table->string('no_tlp',15);
            $table->string('no_inet',15);
            $table->string('nama_pelanggan')->nullable();
            $table->string('keterangan')->nullable();
            $table->double('redaman1')->nullable();
            $table->double('redaman2')->nullable();
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->date('tgl_kegiatan');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('kegiatans');
    }
}
