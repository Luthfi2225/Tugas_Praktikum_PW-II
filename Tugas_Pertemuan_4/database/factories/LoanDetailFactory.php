<?php

namespace Database\Factories;

use App\Models\LoanDetail;
use App\Models\Loan;
use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LoanDetail>
 */
class LoanDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'loan_id' => Loan::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'is_return' => $this->faker->boolean()
        ];
    }
}
