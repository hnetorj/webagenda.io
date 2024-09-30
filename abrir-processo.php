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
                <h1>Processo 123456</h1>                 
                
                <table style="margin-top: 20px;">
                <thead>
                    <th>Número</th>
                    <th>Advogado</th>
                    <th>Status</th>                    
                    <th>Anexo</th>                 
                </thead>
                <tbody>
                    <tr>
                        <td>123456</td>
                        <td>Advogado 1</td>
                        <td>Em andamento</td>
                        <td>
                            <a href="#">
                               <button type="submit" class="btnSubmit"><i class="fas fa-download"></i>&nbsp;Download</button> 
                            </a>
                        </td>                       
                    </tr>
                </tbody>
                    </table>                    
            </div>
        </div>      
        <?php
            require_once('footer.php');
        ?>

