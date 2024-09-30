<?php
	/*header("content-type: text/html;charset=utf-8");
	$host = "mysql642.umbler.com:41890";
	$user = "webagenda_rv";
	$password = "rfvg199400";
	$database = "webagenda";
	$port = "41890";
	$socket = "";
	$conexaoBaseDados = mysqli_connect($host, $user, $password, $database);
	mysqli_query($conexaoBaseDados,"SET NAMES 'utf8'");
	mysqli_query($conexaoBaseDados,'SET character_set_connection=utf8');
	mysqli_query($conexaoBaseDados,'SET character_set_client=utf8');
	mysqli_query($conexaoBaseDados,'SET character_set_results=utf8');*/
	ob_start();
	if (!isset($_SESSION)) session_start(); 

	// ########################################
	// ######## VARIAVEIS DE AMBIENTE #########
	// ########################################

	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	ini_set('session.gc_probability', 1);
	ini_set('session.gc_divisor', 100);

	//require_once("acts/errorhandling.php");

	// ########################################
	// ############ CONN DATABASE #############
	// ########################################

	// DEV
	$conn = new mysqli("localhost", "root", "root", "webagenda");

	// PRD
	//$conn = new mysqli("mysql642.umbler.com:41890", "webagenda_rv", "Hoxhbn4657", "webagenda");

	if ($conn->connect_errno) {
	    die("00000 - Failed to connect to MySQL: [$conn->connect_errno] $conn->connect_error");
	}

	// ########################################
	// ############## COOKIES #################
	// ########################################

	if(!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"])) {
		if(isset($_COOKIE['usu_id']) && !empty($_COOKIE['usu_id'])) {
			$_SESSION["usu_id"] = $_COOKIE['usu_id'];
		}
	}	

	if(!isset($_SESSION["usu_login"]) || empty($_SESSION["usu_login"])) {
		if(isset($_COOKIE['usu_login']) && !empty($_COOKIE['usu_login'])) {
			$_SESSION["usu_login"] = $_COOKIE['usu_login'];
		}
	}

	if(!isset($_SESSION["usu_nome"]) || empty($_SESSION["usu_nome"])) {
		if(isset($_COOKIE['usu_nome']) && !empty($_COOKIE['usu_nome'])) {
			$_SESSION["usu_nome"] = $_COOKIE['usu_nome'];
		}
	}

	if(!isset($_SESSION["usu_nivel"]) || empty($_SESSION["usu_nivel"])) {
		if(isset($_COOKIE['usu_nivel']) && !empty($_COOKIE['usu_nivel'])) {
			$_SESSION["usu_nivel"] = $_COOKIE['usu_nivel'];
		}
	}
?>