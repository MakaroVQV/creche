<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardapioSeeder extends Seeder
{

    public function run(): void
        {
            DB::table('cardapios')->insert([
                'colacao'          => 'Mini pão francês com manteiga;
                Café com leite',
                
                'lanche_manha'      => 'Biscoito maionese;
                Suco de maracujá',
                
                'almoco'           => 'Arroz, Feijão preto, Carne moída, Macarrão a bolonhesa;
                Suco: Limonada;
                Sobremesa: Maçã',
                
                'lanche_tarde'      => 'Duo de frutas (maçã e banana)'
            ]);
        }
}

