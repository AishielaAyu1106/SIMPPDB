<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tambah_jadwal()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
        ->post(route('updateJadwal'), [
            'Jalur_pendaftaran'=>'Afirmasi',
            'tanggal_awal'=>'2022-12-29',
            'tanggal_akhir'=>'2022-12-30'
        ]);

        $response->assertStatus(302);
    }
}
