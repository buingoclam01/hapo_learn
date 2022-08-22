<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use App\Models\Course;

class TagFactory extends Factory
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
            'name' => $this->faker->unique()->randomElement(['HTML', 'CSS', 'JS', 'PHP', 'Laravel', 'Ruby', 'scss', 'git', 'nodejs', 'agular', 'nosql', 'C#', 'C++', '.Net','mongodb','w3school','WBS','ruby']),
        ];
    }
}
