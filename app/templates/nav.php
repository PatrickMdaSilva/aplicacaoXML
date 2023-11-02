<?php 

if (isset($_SESSION["email"])) {

?>
<div class="mother">
    <div class="evaluetion">
        <h4><a href="../public/index.php?pag=imc&folder=templates">IMC</a></h4>
    </div>
    <div class="evaluetion">
        <h4><a href="../public/index.php?pag=kcal&folder=templates">Kcal</a></h4>
    </div>
    <div class="evaluetion">
        <h4><a href="../public/index.php?pag=mass&folder=templates">%FAT</a></h4>
    </div>
</div>

<?php 
} else {

    header("Location://localhost/php/aplicationXML/public/index.php");
}    

?>