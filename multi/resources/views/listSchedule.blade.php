<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
		<div class="prof">
			<h2 class="border border-secondary rounded bg-secondary text-white col-md-12">Lista de Agendamentos</h2>
			<hr />
			<table class="table table-hover table-sm border border-secondary">
			    <tr>
				    <td class="table-dark">Paciente</td>
				    <td class="table-dark">Profissional</td>
				    <td class="table-dark">Área</td>
				    <td class="table-dark">Data agendada</td>
				    <td class="table-dark">Hora</td>
					<td colspan="3" class="table-dark">
						<a href="cadastraAgendamento.php" style="padding-left: 52%;">
							<button class="btn btn-primary btn-sm">Novo agendamento</button>
						</a>
					</td>
			    </tr>
				@foreach ($schedules as $schedule)
					<tr>
						<td class="table-active">{{  }}</td>
						<td class="table-active">{{  }}</td>
						<td class="table-active">{{  }}</td>
						<td class="table-active">{{  }}</td>
						<td class="table-active">{{  }}</td>
						<td class="table-active">
							<a href="{{  }}">
								<button type="button" class="btn btn-success btn-sm">	Exibir</button>
							</a>
						</td>
						<td class="table-active">
							<a href="{{  }}">
								<button type="button" class="btn btn-warning btn-sm">Editar</button>
							</a>
						</td>
						<td class="table-active">
                        @csrf	
                        @method('delete')
							<a href="{{  }}">
								<button type="button" class="btn btn-danger btn-sm">Apagar</button>
							</a>
						</td>
					</tr>
                @endforeach
            </table>
		</div>
	</body>
	<script>
	</script>
</html>