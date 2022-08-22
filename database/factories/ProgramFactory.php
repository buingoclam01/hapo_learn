<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Program;
use App\Models\Lesson;

class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'file_type' => $this->faker->randomElement(['docx', 'mp4', 'pdf']),
            'lesson_id' => $this->faker->randomElement(Lesson::pluck('id')),
            'link' => $this->faker->url(),
        ];
    }
}
