<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fantasy', 'Sci-Fi', 'Romance', 'Mystery & Thriller', 'Horror', 'Historical Fiction',
            'Biography & Memoir', 'Self-Help', 'Business & Management', 'History', 'Science & Technology',
            'Cookbook', 'Education & Reference', 'Philosophy & Religion', 'Travel',
            'Art & Photography', 'Health & Fitness', 'Children\'s Literature', 'Anthology'
        ];

        foreach ($categories as $cat) {
            Category::create([
                'category' => $cat
            ]);
        }
    }
}
