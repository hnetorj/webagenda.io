<?php
	require_once('conexao.php');

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$celular = $_POST['celular'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];	
	$sexo = $_POST['genero']; /* 0 - Masculino - 1 - Femenino */
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$tipo = "2"; // Cliente

	function formatarData($data){
		$rData = implode("-", array_reverse(explode("/", trim($data))));
		return $rData;
	}

	$data_nasc = formatarData($_POST['nascimento']);
	$data_nasc =  date('y/m/d');

	mysqli_query($conn,"INSERT INTO USUARIO (NOME, TELEFONE, CELULAR, USUARIO, SENHA, EMAIL, TIPO, CPF, ENDERECO, DATA_NASC, SEXO)
VALUES ('" . $nome . "','" . $telefone . "','" . $celular . "', '". $usuario ."' ,'" . md5('$senha') . "', '" . $email . "', '" . $tipo . "', '" . $cpf. "', '" . $endereco . "', '" . $data_nasc . "', '" . $sexo . "')");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webagenda</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
 </head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 30px;">
			<div class="col-sm-12">
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <h1 class="display-4" style="color: #000;">Sucesso!</h1>
			    <p class="lead" style="color: #000;">O Cliente foi registrado com sucesso!</p>
			    <a href="../cadastra-cliente.php" class="btn btn-info">Voltar</a>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>	