<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fichas_medica')->insert([
            'aluno_id'          => '1',
            'altura'            => '115',
            'peso'              => '55',
            'alergias'          => 'Dipirona, poeira,camarão ',
            'medicamentos'      => 'bomba de asma',
            'tipo_sanguineo'    => 'O+',
            'observacoes'       => 'Criança com asma',
        ]);
    }
}
