<?php
$folder = "measures";

if ($model->validateAccount($_SESSION["email"],$folder)== true && isset($_SESSION["email"])) {

$arrayMeasures = $model->tranformXMLObject($_SESSION["email"], $folder);
$weight = $arrayMeasures["measures"]["weight"];
$height = $arrayMeasures["measures"]["height"];
$age = $arrayMeasures["measures"]["age"];
$sex = $arrayMeasures["measures"]["sex"];
$kcal = $model->calcKcal($weight, $height, $age, $sex);

?>


    <div class="cadastrar">
        <h2>Calorias</h2>
        <p>Seu peso atual é <?= $arrayMeasures["measures"]["weight"] ?> kg</p>
        <br>
        <p>Sua altura atual é <?= $arrayMeasures["measures"]["height"] ?> cm</p>
        <br>
        <p>Sua idade atual é <?= $arrayMeasures["measures"]["age"] ?> anos</p>
        <br>
        <h3>Seu gasto calórico atual é de <?= $kcal ?> kcal</h3>

    </div>


<?php } else { 

    header("Location://localhost/php/aplicationXML/public/index.php?pag=errorMeasures&folder=templates");

} 
?>