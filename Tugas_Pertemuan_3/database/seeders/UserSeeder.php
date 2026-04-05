<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kodeJurusan = "55201";

        for ($i = 1; $i <= 50; $i++) {
            $angkatan = $faker->numberBetween(21, 25);
            $nomorUrut = str_pad($i, 3, '0', STR_PAD_LEFT);
            $npm = $kodeJurusan . $angkatan . $nomorUrut;

            User::create([
                'npm' => $npm,
                'username' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
            ]);
        }
    }
}
