<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelas')->insert([
            [
                'user_id' => 1,
                'kode_kelas' => 'KLS101',
                'no_ruangan' => '101',
                'fakultas' => 'Teknik',
                'program_studi' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'kode_kelas' => 'KLS102',
                'no_ruangan' => '102',
                'fakultas' => 'Ekonomi',
                'program_studi' => 'Manajemen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'kode_kelas' => 'KLS103',
                'no_ruangan' => '103',
                'fakultas' => 'Hukum',
                'program_studi' => 'Ilmu Hukum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
