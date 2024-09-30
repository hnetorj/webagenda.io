<?php
    require_once('header.php');
?>
<div class="containerConteudo">
    <div class="conteudo">
    <h1>Cadastrar advogado</h1>
    <a href="index-func.php"><button class="btnSubmit"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>
        <form action="acts/acts.cadastrar-advogado.php" method="post" style="margin-top: 20px;">
            <input type="text" name="nome" placeholder="Nome" class="inputForm">
            <input type="text" name="usuario" placeholder="OAB" class="inputForm"><br>
            <input type="text" name="especialidade" placeholder="Especialidade" class="inputForm">
            <input type="text" name="telefone" placeholder="Telefone" class="inputForm"><br>
            <input type="text" name="celular" placeholder="celular" class="inputForm">
            <input type="email" name="email" placeholder="E-mail" class="inputForm"><br>
            <input type="password" name="senha" placeholder="senha" class="inputForm"><br>
            <button type="submit" class="btnSubmit">Cadastrar</button>
        </form>    
    </div>
    </div>      
<?php
    require_once('footer.php');
?>


