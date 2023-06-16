<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            'name'                 => 'Sara Matos',
            'responsavel_id'       => 2,
            'idade'                => 5,
            'genero'               => 'Feminino'
        ]);
        
    }
}
