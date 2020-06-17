<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
		<div class="container">
			<h2 class="border border-primary rounded bg-primary text-white col-md-12">Lista de Profissionais</h2>
			<hr />
			<div scope="row">
				<table class="table table-hover table-sm border border-dark">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Nome</td>
							<th scope="col">Área de Atuação</td>
							<th scope="col">Licença Profissional</td>
							<th scope="col" class="collapse" id="cpf">CPF</td>
							<th scope="col" class="collapse" id="phone">Celular</td>
							<th scope="col">
								<a href="{{route('professional.create')}}">
									<button class="btn btn-primary btn-sm">Novo</button>
								</a>
							</th>
						</tr>
					</thead>
					@foreach($professionals as $professional)
						<tbody>
							<tr>
								<td scope="col">{{$professional->name}}</td>
								<td scope="col">{{$professional->prof}}</td>
								<td scope="col">{{$professional->license}}</td>
								<td scope="col" class="collapse" id="cpf">{{$professional->cpf}}</td>
								<td scope="col" class="collapse" id="phone">{{$professional->phone}}</td>
								<td class="d-flex flex-row">
									<nav>
										<a class="nav-link dropdown-toggle btn btn-success btn-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
										<div class="dropdown-menu">
											<a class="dropdown-item text-success" href="#">Exibir</a>
											<a class="dropdown-item text-warning" href="#">Editar</a>
											<a class="dropdown-item text-danger" href="#">Deletar</a>
										</div>
									</nav>
								</td>
							</tr>
						</tbody>
					@endforeach
				</table>
			</div>
		</div>
	@include('down')
	<script>
		if (($(window).width()) > 500) {
			$('.collapse').show();
		}
	</script>
	</body>
</html>