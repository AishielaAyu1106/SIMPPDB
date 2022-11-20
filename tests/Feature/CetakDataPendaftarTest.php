<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CetakDataPendaftarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_export_data_pendaftar()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/cetak-data-pendaftaran');
        $response->assertStatus(200);
    }
}
