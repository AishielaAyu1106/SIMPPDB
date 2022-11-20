<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MengelolaInformasiPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_informasi_pendaftaran()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/info-pendaftaran');
        $response->assertStatus(200);
    }

    public function test_tambah_informasi_pendaftaran()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
        ->post(('/informasi-pendaftaran'), [
            'syarat_usia'=>'minimal 21 tahun',
            'ijazah'=>'minimal memiliki ijazah smp',
            'surat'=>'file',
            'surat_lainnya'=>'file'
        ]);

        $response->assertStatus(302);
    }

    public function test_hapus_informasi_pendaftaran() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post(url('/info-pendaftaran/delete/1'));
        $response->assertStatus(302);
    }
}
