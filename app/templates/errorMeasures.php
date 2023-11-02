<?php 
if(isset($_SESSION["email"])) {
?>
    <div class="cadastrar">
        <h2>Preencha medidas</h2>
    </div>
    <?php
} else {
    header("Location://localhost/php/aplicationXML/public/index.php");
}
?>

