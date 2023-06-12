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
            'name'          => 'Marco',
            'email'         => 'marco@g.com',
            'password'      => Hash::make('12345678'),
            'telefone'      => '21974874966',
            'profile'       => 'admin'
        ]);

        DB::table('users')->insert([
            'name'          => 'Erick',
            'email'         => 'erick@g.com',
            'password'      => Hash::make('12345678'),
            'telefone'      => '21979444070',
            'profile'       => 'responsavel'
        ]);
        DB::table('users')->insert([
            'name'          => 'Francisco',
            'email'         => 'francisco@g.com',
            'password'      => Hash::make('12345678'),
            'telefone'      => '21967060373',
            'profile'       => 'aluno'
        ]);
        DB::table('users')->insert([
            'name'          => 'André',
            'email'         => 'andr@andr.com.br',
            'password'      => Hash::make('12345678'),
            'telefone'      => '21975665441',
            'profile'       => 'admin'
        ]);
        DB::table('users')->insert([
            'name'          => 'Luis',
            'email'         => 'luis@g.com',
            'password'      => Hash::make('12345678'),
            'telefone'      => '21990814404',
            'profile'       => 'responsavel'
        ]);
    }
}
