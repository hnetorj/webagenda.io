<?php

require_once 'Usuario.php';

final class Advogado extends Usuario{
    
    private $nome;
    private $oab;
    private $especializacao;  
    private $tel; 
    private $cel;
    private $email;
    
    function getNome() {
        return $this->nome;
    }

    function getOab() {
        return $this->oab;
    }

    function getEspecializacao() {
        return $this->especializacao;
    }

    function getTel() {
        return $this->tel;
    }

    function getCel() {
        return $this->cel;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setOab($oab) {
        $this->oab = $oab;
    }

    function setEspecializacao($especializacao) {
        $this->especializacao = $especializacao;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setCel($cel) {
        $this->cel = $cel;
    }

    function setEmail($email) {
        $this->email = $email;
    }

            
    function cadastrarPerfil($conexao,$usuario){
        print("teste");
    }
    
    function atualizarPerfil(){
        print("teste");
    }
    
    function consultarAgenda(){
        print("teste");
    }   
  
    
}

