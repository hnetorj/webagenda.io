<?php

require_once 'conexao.php';

//Obtendo os dados via post
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];
//print($nascimento);
$genero = $_POST['genero'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Inserção no banco de dados
$sql = "insert into cliente values(default,'$usuario','$senha','$nome',$genero,'$email','$endereco','$nascimento','$celular','$telefone','$cpf')";
$resultado = mysqli_query($conexaoBaseDados, $sql);

//verificação de resultado da inserção
if($resultado==true){
    print("<script>window.close()</script>");
}else{
    print("<script>alert('ocorreu um erro. tente novamente ou entre em contato com o desenvolvedor.');window.close();</script>");
}

//verificando o resultado da inserção com try catch
try{
    $sql = "insert into cliente values(default,'$usuario','$senha','$nome',$genero,'$email','$endereco','$nascimento','$celular','$telefone','$cpf')";
    $resultado = mysqli_query($conexaoBaseDados, $sql);
} catch (Exception $ex) {
    print($ex->getMessage());
}
