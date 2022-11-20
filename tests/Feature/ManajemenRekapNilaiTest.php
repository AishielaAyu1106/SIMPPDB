<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenRekapNilaiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_lihat_rekap_nilai_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->get('/rekap-nilai-siswa/formulir');
        $response->assertStatus(200);
    }
    public function test_tambah_rekap_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)
        ->get(('/rekap-nilai-siswa/formulir'), [
            'mtk'=>'90',
            'ipa'=>'90',
            'ips'=>'90',
            'basing'=>'90'
        ]);

        $response->assertStatus(200);
    }

    public function test_hapus_rekap_nilai() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post(url('/rekap-nilai-admin/delete/2'));
        $response->assertStatus(200);
    }
}
