<?php

namespace Database\Factories;

use App\Models\TeacherCourse;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as faker;

class TeacherCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this ->faker->randomElement(Course::pluck('id')),
            "user_id" => $this->faker->randomElement(User::where('role', config('roles.teacher'))->pluck('id')),
            'teacher_course_time' => $this->faker->time(),
        ];
    }
}
