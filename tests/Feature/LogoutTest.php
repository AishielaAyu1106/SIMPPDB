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
        $admin = User::where('id', '1')->first();

        $response = $this->actingAs($admin)->delete(route('logout'));
        $response->assertStatus(302);
    }

    public function test_logout_siswa()
    {
        $calonsiswa = User::where('id', '1')->first();

        $response = $this->actingAs($calonsiswa)->delete(route('logout'));
        $response->assertStatus(302);
    }
}
