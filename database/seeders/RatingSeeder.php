<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ratings')->insert([
            [
                "consultant_id" => 1,
                "user_id" => 1,
                "rating" => 5,
                "comment" => 'Konsultan paling Uhuyy',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "consultant_id" => 2,
                "user_id" => 1,
                "rating" => 5,
                "comment" => 'Konsultan paling bagus',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "consultant_id" => 3,
                "user_id" => 1,
                "rating" => 5,
                "comment" => 'Konsultan paling baik',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
