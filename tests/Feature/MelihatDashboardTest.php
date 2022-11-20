<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MelihatDashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_dashboard_admin()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_lihat_dashboard_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->get('/dashboard-siswa');
        $response->assertStatus(200);
    }
}
