<?php
    require_once('header.php');
    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php');

    $id = $_GET['id'];    
    
    $processo = $conn->query("SELECT NR_PROCESSO, NOME_PROC, CPF_CLI, STATUS, OBSERVACAO FROM PROCESSO INNER JOIN USUARIO ON PROCESSO.ID_USUARIO = USUARIO.ID_USUARIO INNER JOIN STATUS_PROCESSO ON PROCESSO.ID_STATUS = STATUS_PROCESSO.ID_STATUS WHERE ID_PROCESSO = $id") or trigger_error($conn->error);
    if ($processo && $processo->num_rows > 0) {
        while($proc = $processo->fetch_object()) { 
            $numero = $proc->NR_PROCESSO;
            $nome = $proc->NOME_PROC;
            $cpf = $proc->CPF_CLI;
            $obs = $proc->OBSERVACAO;            
        }
    }

    $status = $conn->query("SELECT * FROM STATUS_PROCESSO ORDER BY ID_STATUS") or trigger_error($conn->error);
?>
<div class="containerConteudo">
    <div class="conteudo">
        <h1>Editar processo.</h1>                 
        <form action="acts/acts.atualizarprocesso.php?id=<?php echo $id; ?>" method="post">
            <label>Nº do processo:</label><br>
            <input type="text" value="<?php echo $numero; ?>" class="inputForm" name="numero-processo"><br><br>
            <label>Nome do processo:</label><br>
            <input type="text" value="<?php echo $nome; ?>" class="inputForm" name="nome"><br><br>
            <label>Cpf do cliente:</label><br>
            <input type="text" value="<?php echo $cpf; ?>" class="inputForm" name="cpf" readonly><br><br>
            <label>Status:</label><br>
            <select class="inputForm" name="status">
                <?php
                    if ($status && $status->num_rows > 0) {
                        while($sta = $status->fetch_object()) {
                            echo '<option value="'.$sta->ID_STATUS.'">'.$sta->STATUS.'</option>';                            
                        }                            
                    }
                ?>
            </select><br><br>
            <label>Observações:</label><br>
            <textarea class="textarea" name="observacao"><?php echo $obs; ?></textarea>
            <br>
            <button class="btnSubmit">Atualizar</button>
        </form>
    </div>
</div>      
<?php
    require_once('footer.php');
?>




