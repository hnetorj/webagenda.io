<?php
/*
require_once 'classes/Cliente.php';
require_once 'classes/Advogado.php';
require_once 'conexao.php';

if(isset($_POST['usuario'])){
    $novoCliente = new Cliente();
    $novoCliente->setUsuario($_POST['usuario']);

    //$novoAdvogado = new Advogado();
    //$novoAdvogado->setEspecializacao("Trabalhista");

    print("Cliente ".$novoCliente->getUsuario());
    //print("<br>");
    //print("Advogado ".$novoAdvogado->getEspecializacao());

    print("<br>");
    print("Cadastrando cliente. ");
    if($novoCliente->cadastrarPerfil($conexaoBaseDados,$novoCliente->getUsuario())){
        print($novoCliente->getUsuario()." Cadastrado");
    }else{
        print("não cadastrado");
    }
}
*/
    require_once('header.php');
?>
        <div class="containerConteudo">
            <div class="conteudo">               
               
                <form action="cliente-consultar-processos.php" method="get" style="margin-top: 20px;" id="processo" target="_blank">
                    <h2>Consultar processo</h2>
                    <input type="text" placeholder="Nº do processo ou CPF" name="numero-processo" class="inputForm">
                    <button type="submit" class="btnSubmit">Consultar</button>
                </form>                
               
            </div>
        </div>      
        <?php
            require_once('footer.php');
        ?>


