<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\Bookshelf;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $bookshelf = Bookshelf::where('name', 'like', '%' . $category->category . '%')->first();

        return [
            'category_id' => $category->id,
            'bookshelf_id' => $bookshelf ? $bookshelf->id : Bookshelf::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(mt_rand(3, 6)),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'publisher' => $this->faker->company(),
            'city' => $this->faker->city(),
            'cover' => $this->faker->imageUrl(640, 480, 'books', true)
        ];
    }
}
