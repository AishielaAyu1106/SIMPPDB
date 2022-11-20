<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ManajemenUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lihat_daftar_user()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->get('/data-admin');
        $response->assertStatus(200);
    }

    public function test_tambah_data_user()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
        ->post(('/data-admin-create'), [
            'name'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'password'=>'123123123'
        ]);

        $response->assertStatus(302);
    }

    public function test_ubah_data_user()
    {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)
            ->post(('/data-admin-edit/4'), [
            'name'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'password'=>'123123123'

            ]);
        $response->assertStatus(302);
    }

    public function test_hapus_data_user() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post(url('/data-admin-delete/4'));
        $response->assertStatus(302);
    }
}
