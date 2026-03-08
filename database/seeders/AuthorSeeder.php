<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'author_id' => Str::uuid(),
                'author_name' => 'Tere Liye',
                'author_description' => 'Penulis novel populer di Indonesia'
            ],
            [
                'author_id' => Str::uuid(),
                'author_name' => 'Budi Raharjo',
                'author_description' => 'Penulis buku teknologi dan pemrograman'
            ],
        ]);
    }
}