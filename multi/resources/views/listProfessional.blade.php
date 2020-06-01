<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
		<div class="prof">
			<h2 class="border border-secondary rounded bg-secondary text-white col-md-12">Lista de Profissionais</h2>
			<hr />
			<table class="table table-hover table-sm border border-secondary">
			    <tr>
			      	<td class="table-dark">Nome</td>
			      	<td class="table-dark">Área de Atuação</td>
			      	<td class="table-dark">Licença Profissional</td>
			      	<td class="table-dark">CPF</td>
			      	<td class="table-dark">Celular</td>
					<td colspan="3" class="table-dark">
						<a href="{{route('professional.create')}}" style="padding-left: 50%;">
							<button class="btn btn-primary btn-sm">Novo profissional</button>
						</a>
					</td>
			    </tr>
				@foreach($professionals as $professional)
				<tr>
					<td class="table-active">{{$professional->name}}</td>
					<td class="table-active">{{$professional->profession}}</td>
					<td class="table-active">{{$professional->license}}</td>
					<td class="table-active">{{$professional->cpf}}</td>
					<td class="table-active">{{$professional->phone}}</td>
					<td class="table-active">
						<a href="">
							<button type="button" class="btn btn-success btn-sm">Exibir</button>
						</a>
					</td>
					<td class="table-active">
						<a href="">
							<button type="button" class="btn btn-warning btn-sm">Editar</button>
						</a>
					</td>
					<td class="table-active">	
						<a href="">
							<button type="button" class="btn btn-danger btn-sm">Apagar</button>
						</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</body>
</html>