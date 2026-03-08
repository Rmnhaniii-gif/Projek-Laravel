<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowing>
 */
class BorrowingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'borrowing_id' => $this->faker->uuid,
        'borrowing_user_id' => \App\Models\User::inRandomOrder()->first()->id ?? \App\Models\User::factory(),
        'borrowing_isreturned' => $this->faker->boolean(30), // 30% sudah dikembalikan
        'borrowing_notes' => $this->faker->optional()->sentence(6),
        'borrowing_fine' => $this->faker->numberBetween(0, 50000),
    ];
}
}
