<?php



abstract class Usuario{
    private $id;
    private $usuario;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

        
     abstract public function cadastrarPerfil($conexao,$usuario);
     abstract public function atualizarPerfil();
     abstract public function consultarAgenda();
}

