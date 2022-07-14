<?php

namespace Database\Factories;

use App\Models\UserCourse;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as faker;

class UserCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'register_lesson_time' => $this->faker->time(),
            'course_id' => $this->faker->randomElement(Course::pluck('id')),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
