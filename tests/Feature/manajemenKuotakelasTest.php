<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class manajemenKuotakelasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_kuota_kelas()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get(route('kuota-kelas.index'));
        $response->assertStatus(200);
    }

    public function test_tambah_kuota_kelas()
    {
        $admin = User::where('role', 'admin')->first();
        $response = $this->actingAs($admin)
                         ->post(route('kuota-kelas.store'), [
                            'Nama_kelas'=>'Kelas A',
                            'Kuota_kelas'=>'36',
                           ]);
        $response->assertStatus(302);
    }
}
