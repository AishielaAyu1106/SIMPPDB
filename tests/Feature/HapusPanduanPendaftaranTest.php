<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HapusPanduanPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hapus_panduan() {
        $admin = User::where('role', 'admin')->first();

        $response = $this->actingAs($admin)->post(url('/upload-panduan/delete/3'));
        $response->assertRedirect('/upload-panduan');
    }
}
