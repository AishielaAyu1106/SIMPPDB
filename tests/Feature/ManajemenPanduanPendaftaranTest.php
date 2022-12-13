<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenPanduanPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function test_tambah_panduan()
    {
        $admin = User::where('role', 'admin')->first();

        // $file = new Panduan()

        $response = $this->actingAs($admin)
        ->post(Route('uploadpanduan'), [
            'nama_berkas'=>'panduan afirmasi',
            // 'upload_berkas'=>'file'

        ]);

         $response->assertStatus(302);
    }
    public function test_lihat_panduan()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/upload-panduan');
        $response->assertStatus(200);
    }




    public function test_download_panduan_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->get('/download-panduan-siswa');
        $response->assertStatus(200);
    }
}
