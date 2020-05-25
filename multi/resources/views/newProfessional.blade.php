<!DOCTYPE html>
<html lang="pt-br">
  <?php include('head.html'); ?>
  <body>
    <?php include('header.html'); ?>
    <form action="cadastraProfissional.php" class="prof" method="POST">
        <h2 class="border border-secondary rounded bg-secondary text-white col-md-8">Novo profissional</h2>
        <hr class="col-md-8" />
        <div class="row">
            <div class="form-group col-md-8" name="nome_profissional">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="nome_profissional">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" name="license">
                <label for="name">Área de atuação:</label>
                <select class="form-control browser-default custom-select" 
                        name="license" style="width: 100%;"></select>  
            </div>
            <div class="form-group col-md-4" name="licenca_atuacao">
                <label for="name">Licença profissional:</label>
                <input type="text" class="form-control" name="licenca_atuacao">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" name="cpf_profissional">
                <label for="name">CPF:</label>
                <input type="text" class="form-control" name="cpf_profissional">
            </div>
            <div class="form-group col-md-4" name="rg_profissional">
                <label for="name">RG:</label>
                <input type="text" class="form-control" name="rg_profissional">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8" name="email_profissional">
                <label for="name">E-mail:</label>
                <input type="text" class="form-control" name="email_profissional">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" name="celular_profissional">
                <label for="name">Celular:</label>
                <input type="text" class="form-control" name="celular_profissional">
            </div>
            <div class="form-group col-md-4" name="dt_cad_profissional">
                <label for="name">Data do cadastro:</label>
                <input type="date" class="form-control" name="dt_cad_profissional">
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