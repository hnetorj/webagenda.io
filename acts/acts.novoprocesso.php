<?php
	require_once('conexao.php');

	$numero = $_POST['numero-processo'];
	$nome = $_POST['nome'];	
	$cpf = $_POST['cpf'];
	$advogado = $_POST['advogado'];
	$status = $_POST['status'];
	$obs = $_POST['observacao'];	


	mysqli_query($conn,"INSERT INTO PROCESSO (NR_PROCESSO, NOME_PROC, CPF_CLI, OBSERVACAO ,ID_STATUS, ID_USUARIO)
VALUES ('" . $numero . "','" . $nome . "','" . $cpf . "', '". $obs ."' ,'" . $status . "', '" . $advogado . "')");
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
			    <p class="lead" style="color: #000;">O Processo foi registrado com sucesso!</p>
			    <a href="../index-advogado.php" class="btn btn-info">Voltar</a>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>	