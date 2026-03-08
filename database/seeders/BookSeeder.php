<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil relasi dulu
        $category = DB::table('categories')->first();
        $publisher = DB::table('publishers')->first();
        $shelf = DB::table('shelfs')->first();
        $author = DB::table('authors')->first();

        DB::table('books')->insert([
            [
                'book_id' => Str::uuid(),
                'book_category_id' => $category->category_id,
                'book_publisher_id' => $publisher->publisher_id,
                'book_shelf_id' => $shelf->shelf_id,
                'book_author_id' => $author->author_id,
                'book_name' => 'Pemrograman Web dengan Laravel',
                'book_isbn' => '9786020321234',
                'book_stock' => 10,
                'book_description' => 'Buku panduan lengkap Laravel.',
                'book_img' => 'laravel.jpg'
            ],
        ]);
    }
}