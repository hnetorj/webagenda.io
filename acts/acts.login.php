<?php
	require_once('conexao.php');
	session_start();

	$login = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	
	$usu_qry = $conn->query("SELECT ID_USUARIO, USUARIO, SENHA, TIPO FROM USUARIO WHERE USUARIO = '" . $login . "'") 
	or trigger_error("Erro: " . $conn->error);

	if ($usu_qry) { 
		if($usu_qry->num_rows === 0) {
			echo 'Usuário não encontrado';
			exit();
		} else {
			while($usuario = $usu_qry->fetch_object()) {
				$usu_id = $usuario->ID_USUARIO;
				$usu_login = $usuario->USUARIO;
				$usu_senha = $usuario->SENHA;
				$usu_nivel = $usuario->TIPO;
				$usu_nome = $usuario->NOME;
			}
			
			$_SESSION['usu_id'] = $usu_id;
			$_SESSION['usu_login'] = $usu_login;
			$_SESSION['usu_nome'] = $usu_nome;
			$_SESSION['usu_senha'] = $usu_senha;
			$_SESSION['usu_nivel'] = $usu_nivel;
			
			if($usu_nivel == 1){
				header('location: ../index-advogado.php');	
			} else if ($usu_nivel == 2){
				header('location: ../index-cliente.php');
			} else if ($usu_nivel == 3){
				header('location: ../index-func.php');
			}
		}			
	}
	else{
		  unset ($_SESSION['usu_login']);
		  unset ($_SESSION['usu_senha']);
		  header('location: ../index.php');	   
	}
?>