<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Thread::create(['title' => 'Diskusi Laravel', 'content' => 'Mari diskusi tentang Laravel.']);
        Thread::create(['title' => 'Diskusi PHP', 'content' => 'Mari diskusi tentang PHP.']);
    }
}
