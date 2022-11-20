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
                            'nama_kelas'=>'Kelas A',
                            'kuota_kelas'=>'9',
                           ]);
        $response->assertStatus(302);
    }

    public function test_ubah_kuota_kelas()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
                         ->post(route('kuota-kelas.update', 2), [
                            'nama_kelas'=>'Kelas B',
                            'kuota_kelas'=>'10',
                           ]);
        $response->assertStatus(302);
    }

    public function test_hapus_kuota_kelas() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->delete(route('kuota-kelas.destroy',3));
        $response->assertStatus(302);
    }
}
