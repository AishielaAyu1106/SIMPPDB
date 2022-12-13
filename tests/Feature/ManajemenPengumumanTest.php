<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenPengumumanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_pengumuman()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/pengumuman');
        $response->assertStatus(200);
    }

    public function test_menambah_pengumuman()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
        ->post(('/kuota-kelas'), [
            'Jalur_pendaftaran'=>'Afirmasi',
            'kelas'=>'Kelas A'
        ]);

        $response->assertStatus(302);
    }

    public function test_hapus_pengumuman() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post(('/pengumuman-delete/1'));
        $response->assertStatus(302);
    }
}
