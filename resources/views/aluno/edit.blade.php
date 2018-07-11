@extends('layouts.app')

@section('content')

<!-- PREENCHIMENTO AUTOMATICO DE CEP-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    </script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alunos</div>
                <form action="{{ url('alunos/'.$data->id_aluno) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        {{ method_field('PUT')}}  

                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome') }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" required class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email') }}" id="email" name="email" placeholder="teste@flexpeak.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">D. Nascimento</label>
                            <input type="text" required class="form-control{{$errors->has('data_nascimento') ? ' is-invalid':''}}" id="data_nascimento" value="{{ old('data_nascimento') }}" name="data_nascimento" placeholder="DD/MM/AA">
                            <div class="invalid-feedback">{{ $errors->first('data_nascimento') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cep">cep</label>
                            <input type="text" required class="form-control{{$errors->has('cep') ? ' is-invalid':''}}" value="{{ old('cep') }}" id="cep" name="cep">
                            <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="numero">numero</label>
                            <input type="text" required class="form-control{{$errors->has('numero') ? ' is-invalid':''}}" value="{{ old('numero') }}" id="numero" name="numero">
                            <div class="invalid-feedback">{{ $errors->first('numero') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="bairro">bairro</label>
                            <input type="text" required class="form-control{{$errors->has('bairro') ? ' is-invalid':''}}" value="{{ old('bairro') }}" id="bairro" name="bairro">
                            <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cidade">cidade</label>
                            <input type="text" required class="form-control{{$errors->has('cidade') ? ' is-invalid':''}}" value="{{ old('cidade') }}" id="cidade" name="cidade">
                            <div class="invalid-feedback">{{ $errors->first('cidade') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="estado">estado</label>
                            <input type="text" required class="form-control{{$errors->has('estado') ? ' is-invalid':''}}" value="{{ old('estado') }}" id="uf" name="estado">
                            <div class="invalid-feedback">{{ $errors->first('estado') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="logradouro">logradouro</label>
                            <input type="text" required class="form-control{{$errors->has('logradouro') ? ' is-invalid':''}}" value="{{ old('logradouro') }}" id="logradouro" name="logradouro">
                            <div class="invalid-feedback">{{ $errors->first('logradouro') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="curso">Curso</label>
                            <input type="text" required class="form-control{{$errors->has('curso') ? ' is-invalid':''}}" value="{{ old('curso') }}" id="curso" name="curso">
                            <div class="invalid-feedback">{{ $errors->first('curso') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control-file{{$errors->has('avatar') ? ' is-invalid':''}}" id="avatar" name="avatar" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('avatar') }}</div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection