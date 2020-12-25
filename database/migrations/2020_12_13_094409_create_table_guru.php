<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat')->nullable();
            $table->unsignedBigInteger('id_gtk');
            $table->foreign('id_gtk')->references('id')
            ->on('src_jenis_gtk')->onDelete('cascade')->onupdate('cascade');
            $table->string('lama_kerja')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->string('tmt_pengangkatan')->nullable();
            $table->string('ijazah_terakhir')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
