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
                <h1>Agendamentos</h1>                 
                <button type="submit" class="btnSubmit" onclick="history.back()"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button>
                <table style="margin-top: 20px;">
                <thead>
                    <th>Advogado</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th></th>                 
                </thead>
                <tbody>
                  
                     <tr>
                        <td>Advogado 1</td>
                        <td>03/11/2018</td>
                        <td>14:00</td>
                        <td>
                            <form action="cancelar-agendamento.php" method="post">
                                <input type="hidden" name="idAgendamento" value="">
                                <button type="submit" class="btnSubmit"><i class="fas fa-calendar-times"></i>&nbsp;Cancelar</button>
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


