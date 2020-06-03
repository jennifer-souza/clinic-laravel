
<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
		<div class="prof">
			<h2 class="border border-secondary rounded bg-secondary text-white col-md-12">Lista de Pacientes</h2>
			<hr>
			<table class="table table-hover table-sm border border-secondary col-md-12">
			    <tr>
			      	<td class="table-dark">Nome</td>
			      	<td class="table-dark">CPF</td>
			      	<td class="table-dark">RG</td>
			      	<td class="table-dark">Data de Nasc.</td>
			      	<td class="table-dark">Telefone</td>
			      	<td class="table-dark">Celular</td>
					<td colspan="3" class="table-dark">
						<a href="{{   }}" style="padding-left: 55%;">
							<button class="btn btn-primary btn-sm" >Novo paciente</button>
						</a>
					</td>
				</tr>
				@foreach ($patients as $patient)
					<tr>
						<td class="table-active">{{   }}</td>
						<td class="table-active">{{   }}</td>
						<td class="table-active">{{   }}</td>
						<td class="table-active">{{   }}</td>
						<td class="table-active">{{   }}</td>
						<td class="table-active">{{   }}</td>
						<td class="table-active">
							<a href="{{   }}">
								<button type="button" class="btn btn-success btn-sm">Exibir</button>
							</a>
						</td>
						<td class="table-active">
							<a href="{{   }}">
								<button type="button" class="btn btn-warning btn-sm">Editar</button>
							</a>
						</td>
						<td class="table-active">	
							<a href="{{   }}">
								<button type="button" class="btn btn-danger btn-sm">Apagar</button>
							</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	@include('down')
	</body>
</html>