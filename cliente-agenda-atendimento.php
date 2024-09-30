<?php
    require_once('header.php');

    $especialidade = $conn->query("SELECT ID_USUARIO, ESPECIALIDADE FROM USUARIO WHERE ESPECIALIDADE IS NOT NULL ORDER BY ESPECIALIDADE;") or trigger_error($conn->error);
?>
<div class="containerConteudo">
    <div class="conteudo">
    <h1>Agendar atendimento</h1>
    <button type="submit" class="btnSubmit" onclick="history.back()"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button>
        <form action="cliente-agenda-atendimento.php" method="post">
            <div style="margin-top: 20px;" id="especialidade" target="_blank">
                <h2>Selecione a especialidade</h2>
                <select name="especialidade" id="especialidade" class="inputForm" onchange="advogado.style.display='block'">
                    <option>Selecione a especialidade</option>
                    <?php
                        if ($especialidade && $especialidade->num_rows > 0) {
                            while($esp = $especialidade->fetch_object()) {
                                echo '<option value="'.$esp->ESPECIALIDADE.'">'.$esp->ESPECIALIDADE.'</option>';
                            }                            
                        }
                    ?>                      
                </select> 
            </div>       
            <?php echo $espe; ?>
            <div style="display: none;margin-top: 20px;" id="advogado">
                <h2>Selecione o advogado</h2>
                <select name="advogado" id="advogado" class="inputForm" onchange="data.style.display='block'">
                    <option>Advogado</option>
                    <option>Advogado 1</option>
                    <option>Advogado 2</option>
                    <option>Advogado 3</option>
                </select> 
            </div>      
            <div style="display: none;margin-top: 20px;" id="data">
                <h2>Selecione a data</h2>
                <select name="data" class="inputForm" onchange="hora.style.display='block'">
                    <option>Data</option>
                    <option>30/11/2018</option>
                    <option>01/12/2018</option>
                </select>
            </div>          
            <div style="display: none;margin-top: 20px;" id="hora">
                <h2>Selecione a hora</h2>
                <select name="hora" class="inputForm">
                    <option>Hora</option>
                    <option>12:00</option>
                    <option>14:00</option>
                    <option>15:00</option>
                </select>            
                <br>
                <button type="submit" class="btnSubmit" style="margin-top: 5px;">Agendar</button>
            </div>
        </form>
    </div>
</div>      
<?php
    require_once('footer.php');
?>

<script>
    $('select#especialidade').on("change", function(){
        $.ajax({
            url: 'acts/acts.agenda.php?',
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#advogado').html(data);
            }
        });
    });
</script>
