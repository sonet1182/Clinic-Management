<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        // Seed the courses table
        foreach (range(1, 10) as $index) {
            DB::table('courses')->insert([
                'id' => $index,
                'name' => $faker->word . ' Course',
            ]);
        }

        // Seed the students table
        foreach (range(1, 200) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'username' => $faker->username,
                'phone' => $faker->phoneNumber,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'course_id' => $faker->numberBetween(1, 10),
            ]);
        }

        // Seed the posts table
        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title' =>  'Test post title ' . $i,
                'status' =>  rand(0, 1),
                'position' =>  $i,
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ratione eius qui',
            ]);
        }
    }
}
