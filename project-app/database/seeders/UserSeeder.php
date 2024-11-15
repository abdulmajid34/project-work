<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {

        User::create([
            'username' => 'admin',
            'nama_akun' => 'User Admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'status' => true,
        ]);

        User::create([
            'username' => 'siswa',
            'nama_akun' => 'User Siswa',
            'password' => bcrypt('password'),
            'role' => 'siswa',
            'status' => true,
        ]);

        User::create([
            'username' => 'ketua_kelas',
            'nama_akun' => 'User Ketua Kelas',
            'password' => bcrypt('password'),
            'role' => 'ketua_kelas',
            'status' => true,
        ]);

        User::create([
            'username' => 'bendahara',
            'nama_akun' => 'User Bendahara',
            'password' => bcrypt('password'),
            'role' => 'bendahara',
            'status' => true,
        ]);

        // Factory::factoryForModel(User::class)->count(50)->create();
    }
}
