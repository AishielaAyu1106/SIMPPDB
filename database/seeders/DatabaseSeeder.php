<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use App\Models\kuota_kelas;
use App\Models\SiswaKelas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'), // password
            'role' => 'calon-siswa',
            'remember_token' => Str::random(10),
        ]);
        Jadwal::create([
            'id' => '1',
            'Jalur_pendaftaran' => 'Prestasi',
            'tanggal_awal' => Carbon::now(),
            'tanggal_akhir' => Carbon::now()
        ]);
        Jadwal::create([
            'id' => '2',
            'Jalur_pendaftaran' => 'Afirmasi',
            'tanggal_awal' => Carbon::now(),
            'tanggal_akhir' => '2022-12-29'
        ]);
        Jadwal::create([
            'id' => '3',
            'Jalur_pendaftaran' => 'Zonasi',
            'tanggal_awal' => Carbon::now(),
            'tanggal_akhir' => Carbon::now()
        ]);

        kuota_kelas::create([

            'Nama_Kelas' =>  'Kelas A',
            'Kuota_kelas' => '8',
        ]);
    }
}
