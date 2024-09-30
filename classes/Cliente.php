<?php

require_once 'Usuario.php';



final class Cliente extends Usuario{
    
    private $nome;
    private $cpf;
    private $endereco;
    private $cel;
    private $tel;
    private $nascimento;
    private $sexo;
    private $email;
    
    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCel() {
        return $this->cel;
    }

    function getTel() {
        return $this->tel;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCel($cel) {
        $this->cel = $cel;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }
        
            
    function cadastrarPerfil($conexao,$usuario){
        $sql = "insert into usuarios values(default,'$usuario')";
        $resultado = mysqli_query($conexao, $sql);
        if($resultado==true){
            return true;
        }else{
            return false;
        }
    }
    
    function atualizarPerfil(){
        print("teste");
    }
    
    function consultarAgenda(){
        print("teste");
    }
    
    function remarcarAgendamento(){
        print("teste");
    }
    
      function realizarAgendamento(){
        print("teste");
    }
    
}

