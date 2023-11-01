<?php
$folder = "measures";

if ($model->validateAccount($_SESSION["email"],$folder)) {
$arrayMeasures = $model->tranformXMLObject($_SESSION["email"], $folder);
$weight = $arrayMeasures["measures"]["weight"];
$height = $arrayMeasures["measures"]["height"] / 100;
$imc = $model->calcIMC($weight, $height);


?>


    <div class="cadastrar">
        <h2>Resultado IMC</h2>
        <p>Seu peso atual é <?= $arrayMeasures["measures"]["weight"] ?> kg</p>
        <br>
        <p>Sua altura atual é <?= $arrayMeasures["measures"]["height"] ?> kg</p>
        <h3><?= $imc ?></h3>

    </div>


<?php } else { 

    header("Location://localhost/php/aplicationXML/public/index.php?pag=errorMeasures&folder=templates");

} 
?>