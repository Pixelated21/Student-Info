<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Database\Factories\StudentFactory;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Seeder;

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
            'name' => 'Javaughn Bailey',
            'email' => 'javaughnbailey21@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Password'),
        ]);




        Student::factory(10)->create();

    }
}
