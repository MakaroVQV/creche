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
            'titulo' => 'Matrículas abertas',
            'conteudo' => 'Renovação de matrículas abertas e novas vagas disponiveis! Entre em contato conosco via telefone para mais informações.',
        ]);
        DB::table('postagens')->insert([
            'titulo' => 'Festa Junina',
            'conteudo' => 'Alunos e Ex-alunos, convidamos você e sua família para comemorar os nossos 10 anos junto de um incrível arrai, teremos diversas comidas típicas, além de incríveis gincanas e muitas brincadeiras. Não perca tempo, venha se divertir conosco.',
        ]);
    }
}