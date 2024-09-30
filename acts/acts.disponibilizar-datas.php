<?php
	require_once('conexao.php');		

	session_start();
  	if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
  	!isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
  	$_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php'); 	
  	
  	$id = $_POST['id_usuario'];	
  	$advogado = $_POST['advogado'];

	$DataInicial= $_POST['dataInicial'];
	$DataInicial 		= implode('-', array_reverse(explode('/', substr($DataInicial, 0, 10)))).substr($DataInicial, 10);
    $DataInicial 		= new DateTime($DataInicial);

	$DataFinal =  $_POST['dataFinal']; 
	$DataFinal 		= implode('-', array_reverse(explode('/', substr($DataFinal, 0, 10)))).substr($DataFinal, 10);
    $DataFinal 		= new DateTime($DataFinal);
	
    $hora = $_POST["hora"];
	$hora_check = array(); 
	foreach($hora as $vhora){
	    $hora_check[] = $vhora;
	}

	$dateRange = array();
    while($DataInicial <= $DataFinal){
        $dateRange[] = $DataInicial->format('Y-m-d');
        $DataInicial = $DataInicial->modify('+1day');
    }

    for($i = 0; $i<count($dateRange); $i++) {     	
    	for ($a=0; $a<count($hora_check); $a++) { 
    	
	mysqli_query($conn,"INSERT INTO AGENDAMENTO (ADVOGADO, DATA_AGENDA, HORA_AGENDA, ID_USUARIO)
VALUES ('" . $advogado . "','" . $dateRange[$i] . "','" . $hora_check[$a] . "', '". $id ."')");
		}
	}
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
			    <p class="lead" style="color: #000;">A sua agenda foi disponivilizada com sucesso.</p>
			    <a href="../index-advogado.php" class="btn btn-info">Voltar</a>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>	