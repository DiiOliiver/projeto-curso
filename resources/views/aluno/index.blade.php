@extends('layouts.app')

@section('stylecss')
<style media="screen">
	.img-avatar-xs {
		width: 30px;
		height: 30px;
		border: 1px solid #c0c0c0;
		border-radius: 5px;
	}
	.a-line {
		line-height: 30px;
	}
</style>

@endsection

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			Contatos
			<a href="{{ url('alunos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive border-0">
				<table class="table table-hover" style="margin-bottom:inherit"> 
					<tbody>
						@foreach ($alunos as $aluno)

						<tr>
							<td>
								<a href="{{ url('alunos/'.$aluno->id_aluno) }}">
									<img src="{{ $aluno->avatar_image }}" class="img-avatar-xs">
								</a>
							</td>
							<td>
								<a class="a-line" href="{{ url('alunos/'.$aluno->id_aluno) }}">
									{{ $aluno->nome }}
								</a>
							</td>
							<td class="d-nome d-sm-table-cell">
								<a class="a-line" href="{{ url('alunos/'.$aluno->id_aluno) }}">
									{{ $aluno->data_nascimento }}
								</a>
							</td>
							<td class="d-nome d-sm-table-cell">
								<a class="a-line" href="{{ url('alunos/'.$aluno->id_aluno) }}">
									{{ $aluno->email }}
								</a>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>			
		</div>		
	</div>
</div>
@endsection