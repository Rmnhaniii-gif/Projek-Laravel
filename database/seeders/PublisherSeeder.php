<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('publishers')->insert([
            [
                'publisher_id' => Str::uuid(),
                'publisher_name' => 'Gramedia',
                'publisher_description' => 'Penerbit Buku Terbesar di Indonesia'
            ],
            [
                'publisher_id' => Str::uuid(),
                'publisher_name' => 'Erlangga',
                'publisher_description' => 'Penerbit Buku Pendidikan dan Umum'
            ],
        ]);
    }
}