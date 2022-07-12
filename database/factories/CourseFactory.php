<?php
namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as faker;


class CourseFactory extends Factory
{
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'avatar'=>$this->faker->imageUrl(50, 50),
            'description'=>$this->faker->text( 100),
            'price'=>$this->faker->numberBetween(1000, 100000)
        ];
    }
}
