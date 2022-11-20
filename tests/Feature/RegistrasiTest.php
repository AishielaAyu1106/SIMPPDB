<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrasiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_registrasi_siswa()
    {

            $user = User::where('role', 'calon-siswa')->first();
            $response = $this->post('/register', [
                'name'=>'aishiela',
                'email' => $user->email,
                'password' => '123123123',
                'password_confirmation'=>'123123123'

            ]);

            $this->assertAuthenticated();
            $response->assertRedirect('/login');

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
