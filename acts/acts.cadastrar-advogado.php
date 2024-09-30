<?php
	require_once('conexao.php');

	$nome = $_POST['nome'];
	$oab = $_POST['usuario'];
	$especialidade = $_POST['especialidade'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo = "1"; // Advogado

	mysqli_query($conn,"INSERT INTO USUARIO (NOME, TELEFONE, CELULAR, USUARIO, SENHA, EMAIL, TIPO, ESPECIALIDADE)
VALUES ('" . $nome . "','" . $telefone . "','" . $celular . "', '". $oab ."' ,'" . md5('$senha') . "', '" . $email . "', '" . $tipo . "', '" . $especialidade . "')");
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
			    <p class="lead" style="color: #000;">O Advogado foi registrado com sucesso!</p>
			    <a href="../cadastra-advogado.php" class="btn btn-info">Voltar</a>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>	