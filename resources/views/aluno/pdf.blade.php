<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PDF</title>
 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <center>
          <h2>Relatório de {{ $aluno->nome }}  
            <img id="logo" src="./images/null.png" width="35">
          </h2>
        </center>
        <br/>
        <h4>- Dados pessoais:</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome completo</th>
              <th scope="col">Email</th>
              <th scope="col">Dt. Nascimento</th>
            </tr>
          </thead>
          <tbody>

              <tr>
                <td> {{ $aluno->id_aluno }}</td>
                <td> {{ $aluno->nome }}</td>
                <td> {{ $aluno->email }}</td>
                <td> {{ $aluno->data_nascimento }}</td>
              </tr>
          </tbody>
        </table>
        <br/>
        <h4>- Endereço:</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">CEP</th>
              <th scope="col">Bairro</th>
              <th scope="col">Logradouro</th>
              <th scope="col">Número</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
          </thead>
          <tbody>
              <tr>
                <td> {{ $aluno->cep }}</td>
                <td> {{ $aluno->bairro }}</td>
                <td> {{ $aluno->logradouro }}</td>
                <td> {{ $aluno->numero }}</td>
                <td> {{ $aluno->cidade }}</td>
                <td> {{ $aluno->estado }}</td>
              </tr>
          </tbody>
        </table>
        <br/>
        <h4>Cursando: {{ $aluno->curso }}</h4>    
    </body>
</html>