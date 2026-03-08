<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BorrowingDetailSeeder extends Seeder
{
    public function run(): void
    {
        $borrowing = DB::table('borrowings')->first();
        $book = DB::table('books')->first();

        DB::table('borrowing_details')->insert([
            [
                'detail_id' => Str::uuid(),
                'detail_book_id' => $book->book_id,
                'detail_borrowing_id' => $borrowing->borrowing_id,
                'detail_quantity' => 1,
            ],
        ]);
    }
}