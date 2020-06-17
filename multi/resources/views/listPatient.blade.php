
<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
	<div class="container col-10" style="padding-top: 5%;">
		<!--<div class="col-10"> -->
			<h2 class="border border-primary rounded bg-primary text-white">Lista de Pacientes</h2>
			<hr />
			<div scope="row">
				<table class="table table-hover table-sm border border-dark">
					<thead class="table-dark">
						<tr>
							<td scope="col">Nome</td>
							<td scope="col">CPF</td>
							<td scope="col" class="collapse">RG</td>
							<td scope="col" class="collapse">Nasc.</td>
							<td scope="col" class="collapse">Celular</td>
							<th scope="col">
								<a href="{{route('patient.create')}}">
									<button class="btn btn-primary btn-sm">Novo</button>
								</a>
							</th>
						</tr>
					</thead>
					@foreach ($patients as $patient)
						<tbody>
							<tr>
								<td scope="col">{{$patient->name}}</td>
								<td scope="col">{{$patient->cpf}}</td>
								<td scope="col" class="collapse">{{$patient->rg}}</td>
								<td scope="col" class="collapse">{{date('d/m/Y', strtotime($patient->birth))}}</td>
								<td scope="col" class="collapse">{{$patient->phone}}</td>
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
		<!--</div>-->
	</div>
	@include('down')
	<script>
		if (($(window).width()) > 500) {
			$('.collapse').show();
		}
	</script>
	</body>
</html>