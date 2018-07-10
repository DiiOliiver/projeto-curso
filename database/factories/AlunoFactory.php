<?php

use Faker\Generator as Faker;

$factory->define(App\Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'data_nascimento' =>$faker->date('Y-m-a'),
        'cep' => $faker->cep,
        'numero' => $faker->numero,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'estado' => $faker->estado,
        'logradouro' => $faker->logradouro
    ];
    //cancelado por falta de tempo
});
