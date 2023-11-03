<?php
$folder = "measures";

if ($model->validateAccount($_SESSION["email"],$folder)== true && isset($_SESSION["email"])) {

$arrayMeasures = $model->tranformXMLObject($_SESSION["email"], $folder);
$abd = $arrayMeasures["measures"]["abd"];
$qua = $arrayMeasures["measures"]["qua"];
$neck = $arrayMeasures["measures"]["neck"];
$height = $arrayMeasures["measures"]["height"];
$sex = $arrayMeasures["measures"]["sex"];
$fat = $model->calcMass($abd, $qua, $neck, $height, $sex);
$fit = 100 - $fat;

?>


    <div class="cadastrar">
        <h2>Calorias</h2>
        <p>Seu abdomen atual tem <?= $arrayMeasures["measures"]["abd"] ?> cm</p>
        <br>
        <p>Seu quadril tem <?= $arrayMeasures["measures"]["qua"] ?> cm</p>
        <br>
        <p>Seu pescoço tem <?= $arrayMeasures["measures"]["neck"] ?> cm</p>
        <br>
        <p>Sua altura atual é <?= $arrayMeasures["measures"]["height"] ?> cm</p>
        <br>
        <h3>Seu percentual de gordura é  <?= $fat ?>%</h3>
        <h3>Seu percentual de massa magra é  <?= $fit ?>%</h3>

    </div>


<?php } else { 

    header("Location://localhost/php/aplicationXML/public/index.php?pag=errorMeasures&folder=templates");

} 
?>