<!DOCTYPE html>
<html lang="pt-br">
@include('head')
<body>
@include('header')
    <hr/>
    <div class="prof" style="padding-left: 14%; padding-top: 3%;">
        <h2 class="border border-info rounded bg-primary text-white col-md-10">Dados do Profissional > {{$person->name}}</h2>
    </div>
    <div class="prof" style="padding-left: 14%; padding-top: 1%;">
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
    </div>
    <hr/>
    <table class="table table-sm border border-secondary col-md-12">
        <td class="table-dark">
            <a href="{{route('professional.index')}}" style="padding-left: 80%;">
                <button class="btn btn-primary btn-sm">Voltar</button>
            </a>
        </td>
    </table>
@include('down')
</body>
</html>