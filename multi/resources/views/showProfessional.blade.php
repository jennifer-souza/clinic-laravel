<!DOCTYPE html>
<html lang="pt-br">
@include('head')
	<body>
    @include('header')
		<div class="prof row border border-secondary col-md-12" style="padding-left: 14%; padding-top: 5%;">
			<h2 class="border border-secondary rounded bg-primary text-white col-md-6" style="position:relative;">Dados do Profissional</h2>
			<hr/>
            <table class="table table-sm border border-secondary col-md-10" >
			    <tr>
			      	<td class="table-info"><h3>{{$person->name}}</h3></td>
                </tr>
            </table>
            <table class="table table-sm col-md-10" >    
                <tr class="row">
                    <td class="table-info col-md-4">Data de Nascimento:</td>                    
                    <td class="table-active col-md-8"><strong>{{date('d/m/Y', strtotime($person->birth))}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">CPF:</td>                    
                    <td class="table-active col-md-8"><strong>{{$person->cpf}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">RG:</td>                    
                    <td class="table-active col-md-8"><strong>{{$person->rg}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">Área de Atuação:</td>
                    <td class="table-active col-md-8"><strong>{{$profession->prof}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">Licença:</td>                    
                    <td class="table-active col-md-8"><strong>{{$profession->license}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">Email:</td>                    
                    <td class="table-active col-md-8"><strong>{{$person->email}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">DDD:</td>  
                    <td class="table-active col-md-8"><strong>{{$phone->ddd}}</strong></td>
                </tr>
                <tr class="row">
                    <td class="table-info col-md-4">Telefone de Contato:</td>                    
                    <td class="table-active col-md-8"><strong>{{$phone->phone}}</strong></td>
                </tr>
            </table>
            <table class="table table-sm border border-secondary col-md-10" style="padding-left: 20%;">
                <td colspan="3" class="table-dark">
                    <a href="{{route('professional.index')}}" style="padding-left: 50%;">
                        <button class="btn btn-primary btn-sm">Voltar</button>
                    </a>
                </td>
            </table>
        </div>
    @include('down')
	</body>
</html>