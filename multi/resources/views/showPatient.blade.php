<!DOCTYPE html>
<html lang="pt-br">
@include('head')
<body>
@include('header')
    <hr/>
    <div class="container" style="padding-top: 3%;">
        <h2 class="border border-info rounded bg-primary text-white text-center col-lg-12">
            {{$person->name}}
        </h2>
        <div class="container" style="padding-top: 1%;">
            <table class="table table-hover table-sm row-sm-10 border border-secondary rounded-5">
                <tr class="">
                    <td colspan="2" class="bg-secondary text-white text-center">Dados do Paciente</td>                    
                </tr>    
                <tr class="">
                    <td class="bg-dark text-white">Nascimento:</td>                    
                    <td class="table-active">
                        <strong>{{date('d/m/Y', strtotime($person->birth))}}</strong>
                    </td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">CPF:</td>                    
                    <td class="table-active"><strong>{{$person->cpf}}</strong></td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">RG:</td>                    
                    <td class="table-active"><strong>{{$person->rg}}</strong></td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Email:</td>                    
                    <td class="table-active"><strong>{{$person->email}}</strong></td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Contato:</td>                    
                    <td class="table-active">
                        <strong>
                            {{  
                                $phone->cellphone ? "(" . $phone->dddc . ") " 
                                . $phone->cellphone . " / (" . $phone->ddd . ") " 
                                . $phone->phone : "(" . $ph->ddd . ") " . $phone->phone
                            }}
                        </strong>
                    </td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Profissão:</td>                    
                    <td class="table-active"><strong>{{$person->prof}}</strong></td>
                </tr>
                <tr class="">
                    <td colspan="2" class="bg-secondary text-white text-center">Endereço</td>                    
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Rua:</td>                    
                    <td class="table-active">
                        <strong>{{$address->street . ", " . $address->number}}</strong>
                    </td>
                </tr>
                <tr class="comp">
                    <td class="bg-dark text-white">Complemento:</td>                    
                    <td class="table-active" id="comp">
                        <strong>{{$address->complement ? $address->complement : ""}}</strong>
                    </td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Bairro:</td>                    
                    <td class="table-active"><strong>{{$address->neighborhood}}</strong></td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">CEP:</td>                    
                    <td class="table-active"><strong>{{$address->zip}}</strong></td>
                </tr>
                <tr class="">
                    <td class="bg-dark text-white">Cidade:</td>                    
                    <td class="table-active">
                        <strong>{{$address->city . "/" . $address->state}}</strong>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr/>
    <table class="table table-sm border border-secondary col-md-12">
        <td class="table-dark">
            <a href="{{route('patient.index')}}" style="padding-left: 80%;">
                <button class="btn btn-primary btn-sm">Voltar</button>
            </a>
        </td>
    </table>
@include('down')
<script>
    if ($('#comp').val() === "") {
        $('.comp').hide();
    }
</script>
</body>
</html>