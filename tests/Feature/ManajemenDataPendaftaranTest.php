<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenDataPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_data_pendaftaran_siswa()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/data-pendaftar');
        $response->assertStatus(200);
    }

    public function test_menerima_data_pendaftaran()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/data-pendaftar/show/1');
        $response->assertStatus(200);
    }

    public function test_menolak_data_pendaftaran()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/data-pendaftar/show/1');
        $response->assertStatus(200);
    }

    public function test_hapus_data_pendaftaran()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post('/data-pendaftar/delete/1');
        $response->assertStatus(302);
    }
}
