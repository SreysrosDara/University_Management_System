<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Faker::class); // Use the app() helper to instantiate Faker

        // Create 50 fake students
        for ($i = 0; $i < 50; $i++) {
            Student::create([
                'first_name'    => $faker->firstName,
                'last_name'     => $faker->lastName,
                'email'         => $faker->unique()->safeEmail,
                'date_of_birth' => $faker->date('Y-m-d'), // Adjust format according to your needs
                // Add other fields here as necessary
            ]);
        }
    }
}
