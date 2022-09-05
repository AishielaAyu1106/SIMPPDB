<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
        user::create([
            
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
            'tanggal_akhir' => Carbon::now()
        ]);
        Jadwal::create([
            'id' => '3',
            'Jalur_pendaftaran' => 'Zonasi',
            'tanggal_awal' => Carbon::now(),
            'tanggal_akhir' => Carbon::now()
        ]);
    }
}
