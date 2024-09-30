<?php
    require_once('header.php');

    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "2" || $_SESSION["usu_id"] == "0") header('Location: index.php');

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
        <a href="cliente-agenda-atendimento.php"><button type="button" class="btnSubmit"><i class="far fa-calendar-alt"></i>&nbsp;Agendar</button></a>
            <a href="cliente-consulta-processo.php"><button type="button" class="btnSubmit"><i class="fas fa-search"></i>&nbsp;Consultar processo</button></a>
            <a href="cliente-cancela-agendamento.php"><button type="button" class="btnSubmit"><i class="fas fa-calendar-times"></i>&nbsp;Cancelar agendamento</button></a>  
        </div>
    </div>      
<?php
    require_once('footer.php');
?> 


