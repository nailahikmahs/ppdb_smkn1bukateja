<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id('pendaftar_id')-> unique(); // Auto-increment primary key
            $table->integer('periode_id')->nullable();
            $table->string('nama_lengkap', 150)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan', ''])->nullable();
            $table->string('nik_anak', 30)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('asal_sekolah', 150)->nullable();
            $table->timestamps();
        
            $table->foreign('periode_id')->references('periode_id')->on('periode');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
