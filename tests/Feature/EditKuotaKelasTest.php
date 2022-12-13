<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class EditKuotaKelasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ubah_kuota_kelas()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
                         ->put(route('kuota-kelas.update', 6), [
                            'Nama_Kelas'=>'Kelas B',
                            'Kuota_kelas'=>'10',
                           ]);
        $response->assertStatus(302);
    }
}
