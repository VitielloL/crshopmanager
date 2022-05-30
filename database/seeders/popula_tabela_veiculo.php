<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_tabela_veiculo extends Seeder
{
    public function run()
    {
        $pessoaId = DB::statement('SELECT TOP 1 id FROM pessoas ');

        DB::table('veiculo')->insert([
            'codigo' => '20181105255',
            'id_pessoa' => $pessoaId,
            'modelo' => 'Sedan',
            'marca' => '200',
            'cor' => 'azul',
            'ano_fab' => '2015',
            'ano_mod' => '2014',
            'combustivel' => 'gas',
            'placa' => 'ABCD1000',
        ]);
    }
}
