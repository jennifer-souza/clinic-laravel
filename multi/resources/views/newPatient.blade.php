<!DOCTYPE html>
<html lang="pt-br">
@include('head')
<body>
@include('header')
<form action="{{ route('patient.store') }}" class="prof" method="POST">
    @csrf
    <div style="padding: 5% 1% 1% 20%;">
        <h2 class="border border-primary rounded bg-primary text-white col-md-8">Novo paciente</h2>
        <div class="row">
            <div class="form-group col-md-8" name="name">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" name="cpf">
                <label for="name">CPF:</label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <div class="form-group col-md-4" name="rg">
                <label for="name">RG:</label>
                <input type="text" class="form-control" name="rg">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3" name="birth">
                <label for="name">Data de nascimento:</label>
                <input type="date" class="form-control" name="birth">
            </div>
            <div class="form-group col-md-5" name="zip">
                <label for="name">CEP:</label>
                <input type="text" class="form-control" name="zip">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6" name="address">
                <label for="name">Logadouro(Ex: Rua, Avenida):</label>
                <input type="text" class="form-control" name="street">
            </div>
            <div class="form-group col-md-2" name="number">
                <label for="name">Nº:</label>
                <input type="text" class="form-control" name="number">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3" name="neighborhood">
                <label for="name">Bairro:</label>
                <input type="text" class="form-control" name="neighborhood">
            </div>
            <div class="form-group col-md-3" name="city">
                <label for="name">Cidade:</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group col-md-2" name="uf">
                <label for="name">UF:</label>
                <input type="text" class="form-control" name="state">
                <!--<select class="form-control browser-default custom-select" 
                    name="uf" style="width: 100%;">
                    <option selected>Estado</option>
                    <option value=""></option>
                </select>-->  
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-1" name="ddd">
                <label for="name">DDD:</label>
                <input type="text" class="form-control" name="ddd">
            </div>
            <div class="form-group col-md-3" name="phone">
                <label for="name">Telefone:</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group col-md-1" name="dddc">
                <label for="name">DDD:</label>
                <input type="text" class="form-control" name="dddc">
            </div>
            <div class="form-group col-md-3" name="cellphone">
                <label for="name">Celular:</label>
                <input type="text" class="form-control" name="cellphone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="email">
                <label for="name">E-mail:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="profession">
                <label for="name">Profissão:</label>
                <input type="text" class="form-control" name="profession">
            </div>
        </div>
    </div>
    <hr class="col-md-12" />
    <div class="row btn-toolbar" role="toolbar" style="padding-left: 50%;">
        <div class="btn-group mr-2" role="group">
            <a href="javascript:history.back()">
                <input type="submit" class="btn btn-danger" value="Cancelar">
            </a>
        </div>
        <div class="btn-group mr-2" role="group">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>    
    </div>
    <hr class="col-md-12" />
</form>
@include('down')
</body>
</html>