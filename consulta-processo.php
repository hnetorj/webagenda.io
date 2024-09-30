<?php
    require_once('header.php');
    session_start();
    if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
    !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
    $_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php');

    $numero = $_GET['numero-processo'];
    $processo = $conn->query("SELECT ID_PROCESSO,NR_PROCESSO, NOME, STATUS FROM PROCESSO INNER JOIN USUARIO ON PROCESSO.ID_USUARIO = USUARIO.ID_USUARIO INNER JOIN STATUS_PROCESSO ON PROCESSO.ID_STATUS = STATUS_PROCESSO.ID_STATUS WHERE PROCESSO.NR_PROCESSO = $numero;") or trigger_error($conn->error);
?>
<div class="containerConteudo">
    <div class="conteudo">
        <h1>Processos encontrados</h1>
        <a href="busca-processo.php""><button class="btnSubmit" style="margin-bottom: 30px;"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>                  
        <table style="margin-top: 20px;">            
            <thead>
                <th>Número</th>
                <th>Advogado</th>
                <th>Status</th>                    
                <th></th>                 
            </thead>
            <tbody>
                <?php
                if ($processo && $processo->num_rows > 0) {
                    while($proc = $processo->fetch_object()) { 
                ?>
                <tr>
                    <td><?php echo $proc->NR_PROCESSO; ?></td>
                    <td><?php echo $proc->NOME; ?></td>
                    <td><?php echo $proc->STATUS; ?></td>
                    <td>
                        <a href="edita-processo.php?id=<?php echo $proc->ID_PROCESSO; ?>" title="<?php echo $proc->ID_PROCESSO; ?>"><button class="btnSubmit"><i class="fas fa-edit"></i>&nbsp;Editar</button></a>
                    </td>                       
                </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>                    
    </div>
</div>      
<?php
    require_once('footer.php');
?>


