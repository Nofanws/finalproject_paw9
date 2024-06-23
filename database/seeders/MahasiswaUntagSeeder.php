<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MahasiswaUntagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data yang akan dimasukkan ke dalam tabel mahasiswa_untags
        DB::table('mahasiswa_untags')->insert([
            [
                'nbi' => '1462200170',
                'nama' => 'Nofan Wahyu S',
                'angkatan' => 2022,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nbi' => '1462200171',
                'nama' => 'Bambang Pamungkas',
                'angkatan' => 2015,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
