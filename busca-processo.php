<?php
    require_once('header.php');
    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php');

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
        <h1>Olá Dr. <?php echo $nome; ?>. O que deseja fazer?</h1>  
        <a href="index-advogado.php""><button class="btnSubmit" style="margin-bottom: 30px;"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>                
        <form action="consulta-processo.php" method="get">
            <input class="inputForm" type="text" placeholder="Nº do processo" name="numero-processo">
            <button class="btnEntrar">Consultar</button>
        </form>
    </div>
</div>      
<?php
    require_once('footer.php');
?>


