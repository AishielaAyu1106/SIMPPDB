<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class EditFormulirPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ubah_formulir_pendaftaran()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)
            ->post(('/edit-formulir-pendaftaran/16'), [
                'Nomor_Pendaftaran' => '003',
                // 'Jalur_pendaftaran' => 'Afirmasi',
                'nama_lengkap' => 'Sari',
                'Jenis_kelamin' => 'Perempuan',
                'NISN' => '11223344',
                'tempat_lahir_siswa' => 'kediri',
                'tanggal_lahir_siswa' => '2020-12-30',
                'agama_siswa' => 'protestan',
                'Sekolah_asal' => 'MTSN 8 Kediri',
                'Tahun_lulus' => '2019',
                // 'status'=>'Berkas Ditolak','Berkas Diterima','Sedang diproses'

            ]);
        $response->assertStatus(302);
    }
}
