<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LogoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logout_admin()
    {
        $admin = User::where('role', 'admin')->first();
        $this->actingAs($admin);
        // $response = $this->be($admin)->get('/logout');
        $this->assertAuthenticated();
        $this->get('/logout')->assertStatus(302);
        // $response->assertRedirect('/');
    }

    public function test_logout_siswa()
    {
        $calonsiswa = User::where('role', 'calon-siswa')->first();
        $this->actingAs($calonsiswa);
        $this->get('/logout')->assertStatus(302);
        // $response = $this->actingAs($calonsiswa)->delete(route('logout'));
        // $response->assertStatus(302);
    }
}
