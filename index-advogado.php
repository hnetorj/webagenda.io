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
            $nome = $func->NOME;         
        }
    }
?>
<div class="containerConteudo">
    <div class="conteudo">
        <h1>Olá Dr. <?php echo $nome; ?>. O que deseja fazer?</h1>                 
        <a href="disponibilizar-datas.php"><button type="button" class="btnSubmit"><i class="far fa-calendar-alt"></i>&nbsp;Disponibilizar datas</button></a>
        <a href="busca-processo.php"><button type="button" class="btnSubmit"><i class="fas fa-edit"></i>&nbsp;Editar processo</button></a>
        <a href="novo-processo.php"><button type="button" class="btnSubmit"><i class="fas fa-plus-square"></i>&nbsp;Novo processo</button></a>
        <a href="anexar-arquivo.php"><button type="button" class="btnSubmit"><i class="fas fa-file-upload"></i>&nbsp;Anexar arquivo</button></a>
    </div>
</div>      
<?php
    require_once('footer.php');
?>        


