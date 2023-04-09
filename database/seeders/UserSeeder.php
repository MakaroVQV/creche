<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nome'          => 'Marco',
            'email'         => 'marco@g.com',
            'password'      => ('12345678'),
            'profile'       => 'admin'
        ]);

        DB::table('users')->insert([
            'nome'          => 'Erick',
            'email'         => 'erick@g.com',
            'password'      => ('12345678'),
            'profile'       => 'responsavel'
        ]);
        DB::table('users')->insert([
            'nome'          => 'Francisco',
            'email'         => 'francisco@g.com',
            'password'      => ('12345678'),
            'profile'       => 'aluno'
        ]);
    }
}
