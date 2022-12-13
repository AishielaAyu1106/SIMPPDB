<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HapusFormulirPendaftaranTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hapus_formulir_pendaftaran() {
        $calonsiswa = User::where('role', 'calon-siswa')->first();

        $response = $this->actingAs($calonsiswa)->post('/formulir-pendaftaran-siswa/delete/15');
        // $response->assertStatus(200);
        $response->assertRedirect('/formulir-pendaftaran-siswa');
    }
}
