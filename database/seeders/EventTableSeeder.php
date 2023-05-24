<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'title'          => 'Final',
            'start'         => '2023-06-21 19:30:00',
            'end'      => '2023-06-21 20:30:00',
        ]);
    }
}
