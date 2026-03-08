<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'book_id' => $this->faker->uuid,
        'book_category_id' => \App\Models\Category::inRandomOrder()->first()->category_id ?? \App\Models\Category::factory(),
        'book_publisher_id' => \App\Models\Publisher::inRandomOrder()->first()->publisher_id ?? \App\Models\Publisher::factory(),
        'book_shelf_id' => \App\Models\Shelf::inRandomOrder()->first()->shelf_id ?? \App\Models\Shelf::factory(),
        'book_author_id' => \App\Models\Author::inRandomOrder()->first()->author_id ?? \App\Models\Author::factory(),

        'book_name' => $this->faker->sentence(3),
        'book_isbn' => $this->faker->unique()->isbn13,
        'book_stock' => $this->faker->numberBetween(1, 20),
        'book_description' => $this->faker->sentence(10),
        'book_img' => $this->faker->imageUrl(200, 300, 'books'),
    ];
}
}
