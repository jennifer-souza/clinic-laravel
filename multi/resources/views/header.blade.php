<nav class="navbar navbar-expand-sm bg-light" style="padding-top: 5%;">
  <ul class="nav nav-tabs" style="padding-left: 10%;">
    <li class="nav-item">
      <a class="nav-link active" href="home.php">Início</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="cadastraPaciente.php">Novo Paciente</a>
        <a class="dropdown-item" href="cadastraProfissional.php">Novo Profissional</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="cadastraAgendamento.php">Novo Agendamento</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Listar</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="listaPaciente.php">Pacientes</a>
        <a class="dropdown-item" href="listaProfissional.php">Profissionais</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="listaAgendamento.php">Agendamentos</a>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Consultas</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Agendadas</a>
          <a class="dropdown-item" href="#">Pré-agendadas</a>
          <a class="dropdown-item" href="#">Pacientes não Agendados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Hoje</a>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sair.php"><strong>Sair</strong></a>
    </li>
  </ul>
</nav>