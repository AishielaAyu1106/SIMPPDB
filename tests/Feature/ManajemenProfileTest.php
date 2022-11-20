<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_profile_admin()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/profile-admin');
        $response->assertStatus(200);
    }

    public function test_lihat_profile_calon_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->get('/profile-siswa');
        $response->assertStatus(200);
    }

    public function test_tambah_profile()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
        ->get(('/profile-admin'), [
            'name'=>'aishiela',
            'email'=>'aishiela@gmail.com',
        ]);

        $response->assertStatus(200);
    }
}
