<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Primeira postagem',
            'conteudo' => 'Primeiro conteudo',
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Segunda postagem',
            'conteudo' => 'Segundo conteudo',
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Terceira postagem',
            'conteudo' => 'Terceiro conteudo',
        ]);
    }
}