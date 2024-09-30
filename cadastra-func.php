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
  <div class="container">
        <div class="cabecalho">
            <div class="logo">
                <img src="imagens/logo.png">
            </div>
            <nav>
            <div class="btnMenu"></div>
            <div class="btnMenu"></div>
            <div class="btnMenu"></div>
            </nav>
            <div class="btnEntrar">
                <button  class="botaoEntrar" onclick="containerLoginOpcoes.style.display='block';containerLoginFunc.style.display='none';containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
                <div class="containerLogin" id="containerLoginCliente" style="display: none;">
                    <center>
                    <h2>Login</h2>
                    <form action="index-cliente.php" method="post">
                    <input type="text" placeholder="Usuário" name="usuario" style="margin-top: 15px;"  class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
                    </form>
                    <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>  
                    <a href="cadastra-cliente.php" style="margin-top: 15px;display: block;">Cadastrar-me</a>
                    </center>
                </div>  
                
                 <div class="containerLogin" id="containerLoginAdvogado" style="display: none;">
                    <center>
                    <h2>Login</h2>
                    <form action="index-advogado.php" method="post">
                    <input type="text" placeholder="Nº OAB" name="oab" style="margin-top: 15px;" class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
                    </form>
                    <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>  
                    <a href="cadastra-advogado.php" style="margin-top: 15px;display: block;">Cadastrar-me</a>
                    </center>
                </div>  
                
                 <div class="containerLogin" id="containerLoginFunc" style="display: none;">
                    <center>
                    <h2>Login</h2>
                    <form action="index-func.php" method="post">
                    <input type="text" placeholder="Usuário" name="usuario" style="margin-top: 15px;" class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';containerLoginFunc.style.display='none'">Entrar</button>
                    </form>
                    <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>  
                    <a href="cadastra-func.php" style="margin-top: 15px;display: block;">Cadastrar-me</a>
                    </center>
                </div>  
                
                 <div class="containerLogin" id="containerLoginOpcoes" style="display: none;">
                    <center>                   
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginOpcoes.style.display='none';containerLoginCliente.style.display='block';containerLoginAdvogado.style.display='none'">Sou cliente</button>
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginOpcoes.style.display='none';containerLoginAdvogado.style.display='block';containerLoginCliente.style.display='none';">Sou advogado</button>
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginOpcoes.style.display='none';containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';containerLoginFunc.style.display='block'">Sou funcionário</button> 
                    </center>
                </div>  
            </div>
        </div>
        <div class="containerConteudo">
            <div class="conteudo">
                <h1>Cadastro de funcionário.</h1>                
                <form action="cadastrar-func.php" method="post">
                    <input type="text" name="usuario" placeholder="Usuário" class="inputForm"><br>
                    <input type="password" name="senha" placeholder="Senha" class="inputForm"><br>
                    <button type="submit" class="btnSubmit">Cadastrar</button>
                </form>
            </div>
        </div>      
        <?php
            require_once('footer.php');
        ?>


