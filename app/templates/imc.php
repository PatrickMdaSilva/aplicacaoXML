<?php
$folder = "measures";

if ($model->validateAccount($_SESSION["email"],$folder)) {
$arrayMeasures = $model->tranformXMLObject($_SESSION["email"], $folder);
$weight = $arrayMeasures["address"]["weight"];
$height = $arrayMeasures["address"]["height"] / 100;
$imc = $model->calcIMC($weight, $height);


?>


    <div class="cadastrar">
        <h2>Resultado IMC</h2>
        <p>Seu peso atual é <?= $arrayMeasures["address"]["weight"] ?> kg</p>
        <br>
        <p>Sua altura atual é <?= $arrayMeasures["address"]["height"] ?> kg</p>
        <h3><?= $imc ?></h3>

    </div>


<?php } else { ?>

    <div class="cadastrar">
        <h2>Preencha medidas</h2>
    </div>

<?php } ?>