<!DOCTYPE html>
<html lang="pt-br">
@include('head')
<body>
@include('header')
    <form action="{{ route('schedule.store') }}" class="prof" method="post" id="form">
    @csrf
      <div id="result"></div> 
        <h2 class="border border-secondary rounded bg-secondary text-white col-md-8">Novo Agendamento</h2>
        <hr class="col-md-8" />
        <div class="row">
            <div class="form-group col-md-8" name="patient">
                <label for="name">Paciente:</label>
                <select class="form-control browser-default custom-select" 
                        name="patient" style="width: 100%;" id="patient">
                    <option selected></option>
                    <option value=""></option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="professional">
                <label for="name">Profissional:</label>
                <select class="form-control browser-default custom-select" 
                        name="professional" style="width: 100%;" id="professional">
                    <option selected></option>
                    <option value=""></option>
                </select>  
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" name="profession">
                <label for="name">Área do atendimento:</label>
                <select class="form-control browser-default custom-select" 
                        name="profession" style="width: 100%;" id="profession">
                    <option selected></option>
                    <option value=""></option>';
                </select>  
            </div>
            <div class="form-group col-md-2" name="date">
                <label for="name">Data:</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="form-group col-md-2" name="time">
                <label for="name">Hora:</label>
                <input type="time" class="form-control" name="time" id="time">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="type">
                <label for="name">Tipo:</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="observation">
                <label for="name">Observações:</label>
                <textarea class="form-control" name="observation" rows="4" id="observation"></textarea>
            </div>
        </div>
        <hr class="col-md-8" />
        <div class="row btn-toolbar" role="toolbar" style="padding-left: 50%;">
            <div class="btn-group mr-2" role="group">
              <a href="{{}}">
                <input type="submit" class="btn btn-danger" value="Cancelar" id="cancelar">
              </a>
            </div>
            <div class="btn-group mr-2" role="group">
              <input type="submit" class="btn btn-success" value="Salvar" id="submit">
            </div>   
        </div>
        <hr class="col-md-8" />
    </form>
</body>
</html>