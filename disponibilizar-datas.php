<?php
  require_once('header.php');

  session_start();
  if (!isset($_SESSION["usu_id"]) || empty($_SESSION["usu_id"]) || 
  !isset($_SESSION['usu_nivel']) || empty($_SESSION["usu_nivel"]) ||
  $_SESSION['usu_nivel'] != "1" || $_SESSION["usu_id"] == "0") header('Location: index.php');

  $id = $_SESSION["usu_id"];   

  $advogado = $conn->query("SELECT ID_USUARIO, NOME, USUARIO FROM USUARIO WHERE ID_USUARIO = $id") or trigger_error($conn->error);  

  if ($advogado && $advogado->num_rows > 0) {
      while($adv = $advogado->fetch_object()) {
      $id = $adv->ID_USUARIO;
      $nome = $adv->NOME;
      $usuario = $adv->USUARIO;      
    }
  }
?>
<div class="containerConteudo">
  <div class="conteudo">
  <h1>Disponibilizar datas de atendimento.</h1>     
  <a href="index-advogado.php""><button class="btnSubmit" style="margin-bottom: 30px;"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</button></a>            
    <form action="acts/acts.disponibilizar-datas.php" method="post">
      <label class="" for="">Data inicial</label><br>
      <input type="date" class="inputForm" min="<?php print(date("Y-m-d", strtotime("now"))); ?>" value="<?php print(date("Y-m-d", strtotime("now"))); ?>" name="dataInicial" id="datainicial" onchange="validaDataFinal()" required><br>  <br>
      <label class="" for="">Data final</label> <br>          
      <input type="date" class="inputForm" min="<?php print(date("Y-m-d", strtotime("now"))); ?>" value="<?php print(date("Y-m-d", strtotime("+1 day"))); ?>" name="dataFinal" id="datafinal" required>

      <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
      <input type="hidden" name="advogado" value="<?php echo $usuario; ?>">

      <h2 style="margin-top: 10px;">Horas</h2>
      <br>
        <input class="" type="checkbox" name="hora[]" value="11:00">
        <label class="" for=""><b>11:00</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="11:30">
        <label class="" for=""><b>11:30</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="12:00">
        <label class="" for=""><b>12:00</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="14:00">
        <label class="" for=""><b>14:00</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="14:30">
        <label class="" for=""><b>14:30</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="15:00">
        <label class="" for=""><b>15:00</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;                        
        <input class="" type="checkbox" name="hora[]" value="15:30">
        <label class="" for=""><b>15:30</b></label> &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        <br><br>
        <button type="submit" class="btnSubmit">Cadastrar</button>
    </form>
  </div>
</div>      
<?php
  require_once('footer.php');
?>
<script language=javascript type="text/javascript">
  var dataInicial;
  document.body.onload = function () {
    var dataInicial = new Date();
    console.log("Hoje é " + dataInicial.getDay() + ", " + dataInicial.getDate() + " de " + dataInicial.getMonth() + " de " + dataInicial.getFullYear());
    console.log("ano: " + dataInicial.getFullYear());
    var mes = parseInt(dataInicial.getMonth()) + parseInt(1);
    console.log("mes: " + (parseInt(dataInicial.getMonth()) + parseInt(1)));
    if (mes <= 9) {
      mes = "0" + mes;
    }
    console.log("mes " + mes);
    console.log("dia: " + dataInicial.getDate());
    var dataMinima = dataInicial.getFullYear() + "-" + mes + "-" + dataInicial.getDate();
    console.log(dataMinima);
    console.log("Data inicial instanciada " + dataInicial);
    document.getElementById('datainicial').setAttribute('min', dataMinima);
  }
  function validaDataFinal() {
    console.log("Mudou a data Inicial");
    var dataInicial = document.getElementById('datainicial').value;
    console.log(dataInicial);
    var dataInicial = document.getElementById('datafinal').value = dataInicial;
    document.getElementById('datafinal').setAttribute('min', dataInicial);
  }
</script>



