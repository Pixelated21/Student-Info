<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_name' => $this->faker->name(),
            'dob' => Carbon::createFromDate($this->faker->year,$this->faker->month,$this->faker->dayOfMonth)
        ];
    }
}
