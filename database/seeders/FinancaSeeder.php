<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FinancaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('financas')->insert([
            'responsavel_id'      => '2',
            'vencimento'          => '2023-05-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'pago'
        ]);
    
        DB::table('financas')->insert([
            'responsavel_id'      => '2',
            'vencimento'          => '2023-04-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'pendente'
        ]);
    
        DB::table('financas')->insert([
            'responsavel_id'      => '2',
            'vencimento'          => '2023-06-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'pendente'
        ]);
    }
}
