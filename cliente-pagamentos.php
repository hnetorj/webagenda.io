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
                <h1>Pagamentos</h1>                 
                <button type="submit" class="btnSubmit" onclick="history.back()"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button>
                <table style="margin-top: 20px;">
                <thead>
                    <th>Serviço</th>
                    <th>Mês</th>
                    <th>Ano</th>
                    <th>Valor</th>
                    <th>Status</th>
                 <th></th>                 
                </thead>
                <tbody>
                    <tr>
                        <td>Mensalidade</td>
                        <td>Novembro</td>
                        <td>2018</td>
                        <td>R$500,00</td>
                        <td>Pago</td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>Mensalidade</td>
                         <td>Novembro</td>
                        <td>2018</td>
                        <td>R$500,00</td>
                        <td>Não pago</td>
                        <td><a href="https://www.itau.com.br" target="_blank"><button type="submit" class="btnSubmit"><i class="far fa-money-bill-alt"></i>&nbsp;Pagar</button></a></td>
                    </tr>
                </tbody>
                    </table>                    
            </div>
        </div>      
        <?php
            require_once('footer.php');
        ?>


