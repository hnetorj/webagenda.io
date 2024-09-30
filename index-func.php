<?php
    require_once('header.php');

    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "3" || $_SESSION["usu_id"] == "0") header('Location: index.php');

    $id = $_SESSION["usu_id"];
    $funcionario = $conn->query("SELECT * FROM USUARIO WHERE ID_USUARIO = $id limit 1") or trigger_error($conn->error);
    if ($funcionario && $funcionario->num_rows > 0) {
        while($func = $funcionario->fetch_object()) {           
            $nome = $func->NOME;           ;            
        }
    }
?> 
<div class="containerConteudo">
    <div class="conteudo">
    <h1>Olá <?php echo $nome; ?>. O que deseja fazer?</h1> 
        <a href="cadastra-advogado.php"><button type="button" class="btnSubmit"><i class="fas fa-user-tie"></i>&nbsp;Cadastrar advogado</button></a>
        <a href="cadastra-cliente.php"><button type="button" class="btnSubmit"><i class="fas fa-user"></i>&nbsp;Cadastrar cliente</button></a>
        <a href="agendamento-por-data.php"><button type="button" class="btnSubmit"><i class="far fa-calendar-alt"></i>&nbsp;Agendamentos por dia</button></a>
        <a href="agendamento-por-cliente.php"><button type="button" class="btnSubmit"><i class="far fa-calendar-alt"></i>&nbsp;Agendamentos por cliente</button></a>
        <a href="anexar-arquivo.php"><button type="button" class="btnSubmit"><i class="fas fa-file-upload"></i>&nbsp;Anexar arquivo em processo</button></a>
    </div>
</div>      
<?php
    require_once('footer.php');
?> 


