<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as faker;

class UserFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->freeEmail(),
            'password' => bcrypt('123456'), // password
            'avatar' => $this->faker->imageUrl(50, 50),
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'address' => $this->faker->streetAddress(),
            'phone' => $this->faker->e164PhoneNumber(),
            'about' => $this->faker->realText(100),
            'role' => $this->faker->numberBetween(0, 1)
        ];
    }
    /**
     * course_id => $thí ->faker ->randomEloquent()
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
