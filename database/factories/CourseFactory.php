<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name($gender = null),
            'avatar' => $this->faker->imageUrl($width = 50, $height = 50),
            'description' => $this->faker->text($maxNbChars = 100),
            'price' => $this->faker->numberBetween(1000, 100000)
        ];
    }
}









