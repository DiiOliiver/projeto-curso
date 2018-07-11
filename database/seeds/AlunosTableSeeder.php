<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Opção 1
        DB::table('alunos')->insert([
	       	'nome' => 'Diego Oliveira',
	       	'email' => 'diego@flexpeak.com.br',
	       	'data_nascimento' => '2018/07/09',
	       	'cep' => '69086001',
	       	'numero' => '43',
	       	'bairro' => 'São josé 3',
	       	'cidade' => 'Manaus',
	       	'estado' => 'Amazonas',
	       	'logradouro' => '69086001',
            'curso' => 'Geografia',
	       	'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
