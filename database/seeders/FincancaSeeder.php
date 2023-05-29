<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FincancaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('financas')->insert([
            'vencimento'          => '2023-05-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'pago'
        ]);
    
        DB::table('financas')->insert([
            'vencimento'          => '2023-04-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'vencido'
        ]);
    
        DB::table('financas')->insert([
            'vencimento'          => '2023-06-01',
            'valor'               => 700.00,
            'valor_pagos'         => 700.00,
            'status'              => 'aberto'
        ]);
    }
}
