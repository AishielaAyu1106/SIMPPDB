<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Form;
use App\Models\User;

class ManajemenFormulirPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tambah_formulir_pendaftaran()
    {

        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)
            ->post(('/formulir-pendaftaran-siswa'), [
                'Nomor_Pendaftaran' => '005',
                'nama_lengkap' => 'Aishiela',
                'Jenis_kelamin' => 'perempuan',
                'NISN' => '12345678',
                'tempat_lahir_siswa' => 'kediri',
                'tanggal_lahir_siswa' => '11-12-2000',
                'agama_siswa' => 'islam',
                'Sekolah_asal' => 'smp',
                'Tahun_lulus' => '2019'
            ]);

        $response->assertStatus(302);
    }


    public function test_lihat_formulir_pendaftaran()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->get('/formulir-pendaftaran-siswa');
        $response->assertStatus(200);
    }

}
