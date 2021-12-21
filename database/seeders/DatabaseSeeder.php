<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Nurlayli Indah Sari",
            'username' => "Nurlayli03",
            'asal_sekolah' => "UM-Palembang",
            'alamat' => "Griya Hero Abadi",
            'nohp' => "08117878267",
            'email' => "nurlayliindahsari@gmail.com",
            'password' => bcrypt('123'),
            'role' => "admin"

        ]);

        User::create([
            'name' => "User 2",
            'username' => "Nurlayli02",
            'asal_sekolah' => "UM-Palembang",
            'alamat' => "Griya Hero Abadi",
            'nohp' => "08117878267",
            'email' => "user2@gmail.com",
            'password' => bcrypt('123'),
            'role' => "peserta"

        ]);
    }
}
