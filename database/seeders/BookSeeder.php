<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create seeder for multiple books with faker
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'publisher' => $faker->company,
                'year' => $faker->year($max = 'now'),
                'isbn' => $faker->isbn10,
                'category' => $faker->randomElement(['Novel', 'Horror', 'Romance', 'Comedy', 'Drama', 'Action', 'Thriller', 'Sci-Fi', 'Fantasy', 'Mystery', 'Biography', 'History', 'Poetry', 'Self-Help', 'Guide', 'Travel', 'Children', 'Religion', 'Science', 'Math', 'Anthology', 'Encyclopedia', 'Dictionaries', 'Comics', 'Art', 'Cookbooks', 'Diaries', 'Journals', 'Prayer books', 'Series', 'Trilogy', 'Biographies', 'Autobiographies', 'Fantasy']),
                'language' => $faker->randomElement(['English', 'Indonesia', 'Japan', 'China', 'Korea', 'German']),
                'edition' => $faker->randomDigit,
                'pages' => $faker->randomDigit,
                'cover' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->text,
                'status' => $faker->randomElement(['Available', 'Unavailable']),
            ]);
        }
    }
}
