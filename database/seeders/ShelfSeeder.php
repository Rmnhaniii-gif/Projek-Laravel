<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('shelfs')->insert([
            [
                'shelf_id' => Str::uuid(),
                'shelf_name' => 'Rak A',
                'shelf_position' => 'Lantai 1 - Kiri'
            ],
            [
                'shelf_id' => Str::uuid(),
                'shelf_name' => 'Rak B',
                'shelf_position' => 'Lantai 1 - Kanan'
            ],
        ]);
    }
}