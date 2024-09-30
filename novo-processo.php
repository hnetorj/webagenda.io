<?php
    require_once('header.php');

    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php');

    $id = $_SESSION["usu_id"];

    $status = $conn->query("SELECT * FROM STATUS_PROCESSO ORDER BY ID_STATUS") or trigger_error($conn->error);
?>
<div class="containerConteudo">
    <div class="conteudo">
    <h1>Novo processo.</h1>  
    <a href="index-advogado.php""><button class="btnSubmit" style="margin-bottom: 30px;"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>                
        <form action="acts/acts.novoprocesso.php" method="post">
            <input type="text" placeholder="Nº do processo" class="inputForm" name="numero-processo">
            <input type="text" placeholder="Nome do processo" class="inputForm" name="nome"><br>
            <input type="text" placeholder="CPF do cliente" class="inputForm" name="cpf">            
            <input type="hidden" name="advogado" value="<?php echo $id; ?>">            
            <select class="inputForm" name="status">
                <option>Selecione ao Status</option>
                    <?php
                        if ($status && $status->num_rows > 0) {
                            while($est = $status->fetch_object()) {
                                echo '<option value="'.$est->ID_STATUS.'">'.$est->STATUS.'</option>';
                            }                            
                        }
                    ?>
            </select><br>
            <textarea class="textarea" placeholder="Observações" name="observacao"></textarea><br>
            <button class="btnSubmit">Cadastrar</button>
        </form>
    </div>
</div>      
<?php
    require_once('footer.php');
?>




