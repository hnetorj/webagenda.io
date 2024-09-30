<?php
    require_once('header.php');
    
?>
<div class="containerConteudo">
    <div class="conteudo">
        <h1>Anexar arquivo a um processo</h1>         
        <form action="acts/acts.anexoarquivo.php" method="post" enctype="multipart/form-data">
            <input type="text" name="numero-processo" placeholder="Nº processo" class="inputForm">
            <input type="file" name="arquivo" placeholder="Selecionar" class="inputForm"><br>
            <button type="submit" class="btnSubmit">Anexar</button>
        </form>  
   </div>
</div>      
<?php
    require_once('footer.php');
?>


