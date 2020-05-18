<?php

class Model {

	private $server = "localhost";
	private $user = "root";
	private $password = "";
	private $db = "mdata";
	private $conn;

	public function __construct() {
		try {
			$this->conn = new PDO("mysql:dbname=$this->db;host=$this->server",$this->user
				, $this->password);
			//echo "Conectado!";
		} catch(PDOException $e) {
			echo "Erro na conexão com o banco <br>" . $e->getMessage(); 
		}
	} 

	public function insert() {
		if (isset($_POST['submit'])) {
			
			if (isset($_POST['idpaciente']) && isset($_POST['idprofissional']) 
				&& isset($_POST['idarea']) && isset($_POST['date']) 
				&& isset($_POST['hora']) && isset($_POST['motivo'])) {

				if (!empty($_POST['idpaciente']) && !empty($_POST['idprofissional']) 
					&& !empty($_POST['idarea']) && !empty($_POST['date']) 
					&& !empty($_POST['hora']) && !empty($_POST['motivo'])) {

					$idpaciente = $_POST['idpaciente'];
					$idprofissional = $_POST['idprofissional'];
					$idarea = $_POST['idarea'];
					$date = $_POST['date'];
					$hora = $_POST['hora'];
					$motivo = $_POST['motivo'];

					$query = "INSERT INTO tb_agendamento VALUES('', '" . $idpaciente . "', 
					'" . $idprofissional . "', '" . $date . "', '" . $hora . "', '" . $motivo . "', 
					'" . $idarea ."')";

					if ($sql = $this->conn->exec($query)) {
						echo "
							<div class='alert alert-success alert-dismissible fade show' role='alert'>
							  Dados salvos com sucesso!
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							    <span aria-hidden='true'>&times;</span>
							  </button>
							</div>
						";
					} else {
						echo "
							<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							  Verifique se todos os campos estão preenchidos!
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							    <span aria-hidden='true'>&times;</span>
							  </button>
							</div>
						";
					}	

				} else {
					echo "
						<div class='alert alert-danger alert-dismissible fade show' role='alert'>
						  Verifique se todos os campos estão preenchidos!
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						    <span aria-hidden='true'>&times;</span>
						  </button>
						</div>
					";
				}
			}
		}
	}
}