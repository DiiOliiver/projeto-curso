<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id_aluno');
            $table->string('nome',100);
            $table->string('email', 200)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->char('cep',8)->nullable();
            $table->string('numero',5);
            $table->string('bairro',20);
            $table->string('cidade',20);
            $table->string('estado',20);
            $table->string('logradouro',50);
            $table->string('avatar', 200)->nullable();
            $table->char('id_curso',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
