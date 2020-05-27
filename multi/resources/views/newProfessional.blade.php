<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Multiterapia</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equive="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="
        sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
  <body>
    <form action="{{ route('professional.store', ['professional' => $professional->id]) }}" class="prof" method="post">
        @csrf
        <h2 class="border border-secondary rounded bg-secondary text-white col-md-8"  style="padding-left: 20%;">Novo profissional</h2>
        <hr class="col-md-8" />
        <div class="row" style="padding-left: 20%;">
            <div class="form-group col-md-8" name="name">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row" style="padding-left: 20%;">
            <div class="form-group col-md-4" name="profession">
                <label for="name">Área de atuação:</label>
                <input type="text" class="form-control" name="profession">
            </div>
            <div class="form-group col-md-4" name="license">
                <label for="name">Licença profissional:</label>
                <input type="text" class="form-control" name="license">
            </div>
        </div>
        <div class="row" style="padding-left: 20%;">
            <div class="form-group col-md-4" name="cpf">
                <label for="name">CPF:</label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <div class="form-group col-md-4" name="rg">
                <label for="name">RG:</label>
                <input type="text" class="form-control" name="rg">
            </div>
        </div>
        <div class="row"  style="padding-left: 20%;">
            <div class="form-group col-md-8" name="email">
                <label for="name">E-mail:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row" style="padding-left: 20%;">
            <div class="form-group col-md-1" name="ddd">
                <label for="name">Celular:</label>
                <input type="text" class="form-control" name="ddd">
            </div>
            <div class="form-group col-md-3" name="phone">
                <label for="name">Celular:</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group col-md-4" name="birth">
                <label for="name">Data de nascimento</label>
                <input type="date" class="form-control" name="birth">
            </div>
        </div>
        <hr class="col-md-8" />
        <div class="row btn-toolbar" role="toolbar" style="padding-left: 50%;">
            <div class="btn-group mr-2" role="group">
              <a href="listaProfissional.php">  
                <input type="submit" class="btn btn-danger" value="Cancelar">
              </a>
            </div>
            <div class="btn-group mr-2" role="group">
              <input type="submit" class="btn btn-success" value="Salvar">
            </div>   
        </div>
        <hr class="col-md-8" />
    </form>
  </body>
</html>