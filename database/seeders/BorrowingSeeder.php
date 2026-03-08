<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BorrowingSeeder extends Seeder
{
    public function run(): void
    {
        $user = DB::table('users')->where('isadmin', false)->first();

        DB::table('borrowings')->insert([
            [
                'borrowing_id' => Str::uuid(),
                'borrowing_user_id' => $user->id,
                'borrowing_isreturned' => false,
                'borrowing_notes' => 'Pinjam untuk tugas kuliah',
                'borrowing_fine' => 0,
            ],
        ]);
    }
}