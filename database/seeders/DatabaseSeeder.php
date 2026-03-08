<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $this->call([
        ShelfSeeder::class,
        PublisherSeeder::class,
        CategorySeeder::class,
        AuthorSeeder::class,
        UserSeeder::class,
        BookSeeder::class,
        BorrowingSeeder::class,
        BorrowingDetailSeeder::class,
    ]);
}
}
