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
            'titulo' => 'Dia internacional da Mulher',
            'conteudo' => 'Nós da Jardim dos Sonhos viemos parabenizar todas as mulheres de dentro e fora da nossa instituição. Mas, principalmente a nossa grande equipe, composta quase que totalmente por excepcionais mulheres!',
        ]);
        DB::table('postagens')->insert([
            'titulo' => 'Dia Mundial do Autismo',
            'conteudo' => '🧩 2 de abril dia mundial do autismo 🧩          Um dia especial para pessoas incríveis 💙',
        ]);
    }
}