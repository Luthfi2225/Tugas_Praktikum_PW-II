<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bookshelf;
use App\Models\Category;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalCategories = Category::count();

        for($i = 1; $i <= $totalCategories; $i++) {
            $categoryName = Category::skip($i-1)->first()->category;
            $number = str_pad($i, 4, '0', STR_PAD_LEFT);

            Bookshelf::create([
                'code' => "RAK-{$number}",
                'name' => $categoryName
            ]);
        }
    }
}
