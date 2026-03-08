<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'id' => $this->faker->uuid,
        'firstname' => $this->faker->firstName,
        'lastname' => $this->faker->lastName,
        'username' => $this->faker->unique()->userName,
        'email' => $this->faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'isadmin' => $this->faker->boolean(10), // 10% admin
    ];
}
}
