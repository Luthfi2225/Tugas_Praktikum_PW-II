<?php

namespace Database\Seeders;

use App\Models\Returnn;
use App\Models\LoanDetail;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $loanDetails = LoanDetail::inRandomOrder()->limit(20)->get();

        foreach ($loanDetails as $detail) {
            Returnn::create([
                'loan_detail_id' => $detail->id,
                'charge' => $faker->boolean(),
                'amount' => rand(2000, 100000),
            ]);
        }
    }
}
