<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_admin()
    {

        $user = User::where('role', 'admin')->first();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123123123'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
        // $response = $this->get('/');

        // $response->assertStatus(302);
    }

    public function test_login_siswa()
    {

        $user = User::where('role', 'calon-siswa')->first();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123123123'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard-siswa');
        // $response = $this->get('/');

        // $response->assertStatus(302);
    }
}
