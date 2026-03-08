<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_id' => Str::uuid(),
                'category_name' => 'Teknologi',
                'category_description' => 'Buku tentang komputer, pemrograman, dll.'
            ],
            [
                'category_id' => Str::uuid(),
                'category_name' => 'Novel',
                'category_description' => 'Cerita fiksi dan non-fiksi'
            ],
        ]);
    }
}