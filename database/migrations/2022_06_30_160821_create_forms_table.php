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
            $table->string('Nomor_Pendaftaran')->unique();
            $table->string('Jalur_pendaftaran');
            $table->string('nama_lengkap', 100);
            $table->string('Jenis_kelamin', 10);
            $table->integer('NISN');
            $table->string('tempat_lahir_siswa', 50);
            $table->date('tanggal_lahir_siswa');
            $table->string('agama_siswa', 20);
            $table->string('Sekolah_asal', 25);
            $table->string('Tahun_lulus', 10);
            $table->string('dusun', 25);
            $table->integer('Rt');
            $table->integer('rw');
            $table->string('kelurahan_desa', 50);
            $table->integer('kode_pos');
            $table->string('kecamatan', 50);
            $table->string('kabupaten_kota', 50);
            $table->string('provinsi', 50);
            $table->string('nomor_hp_siswa', 13);
            $table->string('email_siswa', 50);
            $table->string('nama_ayah', 50);
            $table->string('tempat_lahir_ayah', 50);
            $table->date('tanggal_lahir_ayah');
            $table->string('NIK_ayah', 16);
            $table->string('pekerjaan_ayah', 50);
            $table->string('nomor_hp_ayah', 13);
            $table->string('nama_ibu', 50);
            $table->string('tempat_lahir_ibu', 50);
            $table->date('tanggal_lahir_ibu');
            $table->string('NIK_ibu', 16);
            $table->string('pekerjaan_ibu', 25);
            $table->string('nomor_hp_ibu', 13);
            $table->string('fcakta');
            $table->string('SKLasli');
            $table->string('fcSTTB');
            $table->string('fcRaport');
            $table->string('suratnarkoba');
            $table->string('Foto');
            $table->string('fcKIP');
            $table->string('fcKPS');
            $table->string('fcPKH');
            $table->string('jenis_prestasi', 50);
            $table->string('tingkat', 50);
            $table->string('nama_prestasi', 50);
            $table->string('tahun', 5);
            $table->string('penyelenggara', 50);
            $table->string('piagam');
            $table->enum('status',['Berkas Diterima' , 'Berkas Ditolak' , 'Sedang diproses'])->default('Sedang diproses');
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
