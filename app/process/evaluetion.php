
<?php
require_once("../model/model.php");
session_start();
$model = new model;

$dom = new DOMDocument("1.0", "UTF-8");

$dom->formatOutput = true;

$measures = [
    'weight' => filter_input(INPUT_POST, 'weight'),
    'height'  => filter_input(INPUT_POST, 'height'),
    'age' => filter_input(INPUT_POST, 'age'),
    'neck' => filter_input(INPUT_POST, 'neck'),
    'qua' => filter_input(INPUT_POST, 'qua'),
    'abd' => filter_input(INPUT_POST, 'abd'),
    'sex' => filter_input(INPUT_POST, 'sex'),
];

foreach ($measures as $measure => $valor) {
    
    ${$measure} = [$measure];
    ${$valor} = [$valor];
    ${$valor} = $dom->createTextNode($valor);
    ${$measure} = $dom->createElement($measure);
    ${$measure}->appendChild(${$valor});
}

$userNode = $dom->createElement("measures");

$userNode->appendChild($weight);
$userNode->appendChild($height);
$userNode->appendChild($age);
$userNode->appendChild($neck);
$userNode->appendChild($qua);
$userNode->appendChild($abd);
$userNode->appendChild($sex);

$rootNode = $dom->createElement("root");

$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

$xml = $dom->saveXML();
$folder = "measures";

//salva os dados em um arquivo XML

$dom->save(dirname(__DIR__) . "./db/measures/" . $_SESSION["email"] . ".xml");
    
 header("Location://localhost/php/aplicationXML/public/index.php?pag=welcome&folder=templates");

