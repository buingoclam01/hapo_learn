<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Course;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->randomElement(Course::pluck('id')),
            'title' => $this->faker->name(),
            'time' => $this->faker->dateTime()->format('H:i:s'),
            'description' => $this->faker->text(200),
        ];
    }
}
