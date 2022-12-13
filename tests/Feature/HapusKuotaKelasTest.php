<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HapusKuotaKelasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hapus_kuota_kelas() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->delete(route('kuota-kelas.destroy',6));
        $response->assertStatus(302);
    }
}
