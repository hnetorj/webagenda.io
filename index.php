<?php
    require_once('header-login.php');
?>
    <div class="btnEntrar">
    <button  class="botaoEntrar" onclick="containerLoginOpcoes.style.display='block';containerLoginFunc.style.display='none';containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
        <div class="containerLogin" id="containerLoginCliente" style="display: none;">
            <center>
            <h2>Login</h2>
                <form action="acts/acts.login.php" method="post">
                    <input type="text" placeholder="Usuário" name="usuario" style="margin-top: 15px;"  class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
                </form>
                <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>
            </center>
        </div>  
        <div class="containerLogin" id="containerLoginAdvogado" style="display: none;">
            <center>
            <h2>Login</h2>
                <form action="acts/acts.login.php" method="post">
                    <input type="text" placeholder="Nº OAB" name="usuario" style="margin-top: 15px;" class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';">Entrar</button>
                </form>
                <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>
            </center>
        </div>  
                
        <div class="containerLogin" id="containerLoginFunc" style="display: none;">
            <center>
            <h2>Login</h2>
                <form action="acts/acts.login.php" method="post">
                    <input type="text" placeholder="Usuário" name="usuario" style="margin-top: 15px;" class="inputLogin">
                    <input type="password" style="margin-top: 5px;" placeholder="Senha" name="senha"  class="inputLogin">
                    <button type="submit" style="margin-top: 5px;"  class="btnLogin" onclick="containerLoginCliente.style.display='none';containerLoginAdvogado.style.display='none';containerLoginFunc.style.display='none'">Entrar</button>
                </form>
                <a href="#" style="margin-top: 15px;display: block;">Esquecei a senha</a>
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
            <h1>Seja bem vindo ao sistema.</h1>
            <p>Voltado para clientes que desejam consultar o seu débito com o escritório, consultar o andamento do seu processo ou agendar consultas com um advogado.</p>
            <form action="acts/acts.newsletter.php" method="post">
                <input type="email" name="email" placeholder="Cadastre seu e-mail para receber novidades." class="inputForm">
                    <button type="submit" class="btnSubmit">Cadastrar</button>
                </form>
            </div>
        </div>      
<?php
    require_once('footer.php');
?>

