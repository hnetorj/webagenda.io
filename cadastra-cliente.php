<?php
    require_once('header.php');
?>
<div class="containerConteudo">
    <div class="conteudo">
    <h1>Cadastrar cliente</h1>
    <a href="index-func.php"><button class="btnSubmit"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>
        <form action="acts/acts.cadastrar-cliente.php" method="post">
            <input type="text" name="nome" placeholder="Nome" class="inputForm">
            <input type="text" name="cpf" placeholder="CPF" class="inputForm"><br>
            <input type="text" name="celular" placeholder="Celular" class="inputForm">
            <input type="text" name="telefone" placeholder="Telefone" class="inputForm"><br>
            <input type="text" name="endereco" placeholder="Endereço" class="inputForm">
            <input type="date" name="nascimento" placeholder="nascimento" class="inputForm"><br>
            <select class="inputForm" name="genero">
                <option>Sexo</option>
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
            </select>
            <input type="text" name="email" placeholder="E-mail" class="inputForm">
            <br>
            <input type="text" name="usuario" placeholder="Usuário" class="inputForm">
            <input type="password" name="senha" placeholder="Senha" class="inputForm">
            <button type="submit" class="btnSubmit">Cadastrar</button>
        </form>  
    </div>
</div>      
<?php
    require_once('footer.php');
?>


