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

            // $user = User::where('role', 'calon-siswa')->first();
            // $this->be($user);
            $response = $this->post('/register', [
                'name'=>'Sari',
                'email' => 'sari@gmail.com',
                'password' => '123123123',
                'password_confirmation'=>'123123123',
                'role' => 'calon-siswa'

            ]);

            // $this->assertAuthenticated();
            $response->assertRedirect('/');

        // $response = $this->get('/');

        // $response->assertStatus(302);
    }
}
