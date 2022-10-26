<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('Nomor_Pendaftaran')->unique()->nullable();
            $table->string('Jalur_pendaftaran')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('Jenis_kelamin')->nullable();
            $table->integer('NISN')->nullable();
            $table->string('tempat_lahir_siswa')->nullable();
            $table->string('tanggal_lahir_siswa')->nullable();
            $table->string('agama_siswa')->nullable();
            $table->string('Sekolah_asal')->nullable();
            $table->string('Tahun_lulus')->nullable();
            $table->string('dusun')->nullable();
            $table->string('Rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan_desa')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('nomor_hp_siswa')->nullable();
            $table->string('email_siswa')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('NIK_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nomor_hp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('NIK_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('nomor_hp_ibu')->nullable();
            $table->string('fcakta')->nullable();
            $table->string('SKLasli')->nullable();
            $table->string('fcSTTB')->nullable();
            $table->string('fcRaport')->nullable();
            $table->string('suratnarkoba')->nullable();
            $table->string('Foto')->nullable();
            $table->string('fcKIP')->nullable();
            $table->string('fcKPS')->nullable();
            $table->string('fcPKH')->nullable();
            $table->string('jenis_prestasi')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('nama_prestasi')->nullable();
            $table->string('tahun')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('piagam')->nullable();
            $table->enum('status',['Terima berkas' , 'Tolak Berkas' , 'Sedang diproses'])->default('Sedang diproses');
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
        Schema::dropIfExists('forms');
    }
};
