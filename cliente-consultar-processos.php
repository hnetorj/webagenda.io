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
                <h1>Processos encontrados</h1>                 
                
                <table style="margin-top: 20px;">
                <thead>
                    <th>Número</th>
                    <th>Advogado</th>
                    <th>Status</th>                    
                    <th></th>                 
                </thead>
                <tbody>
                    <tr>
                        <td><?php print($_GET['numero-processo']); ?></td>
                        <td>Advogado 1</td>
                        <td>Em andamento</td>
                        <td>
                            <form action="abrir-processo.php" method="get" target="_blank">
                                <input type="hidden" name="idprocesso" value="<?php print($array['idprocesso']); ?>">
                                <button type="submit" class="btnSubmit"><i class="fas fa-hand-point-up"></i>&nbsp;Consultar</button>
                            </form>
                        </td>                       
                    </tr>
                </tbody>
                    </table>                    
            </div>
        </div>      
        <?php
            require_once('footer.php');
        ?>


