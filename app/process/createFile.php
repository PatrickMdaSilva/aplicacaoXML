<?php
require_once("../model/model.php");

$model = new model;

$dom = new DOMDocument("1.0", "UTF-8");

$dom->formatOutput = true;

$campos = [
    'email' => filter_input(INPUT_POST, 'email'),
    'name'  => filter_input(INPUT_POST, 'name'),
    'lastname' => filter_input(INPUT_POST, 'lastname'),
    'password' => filter_input(INPUT_POST, 'password'),
    'confpassword' => filter_input(INPUT_POST, 'confpassword'),
];

foreach ($campos as $campo => $valor) {

    ${$campo} = [$campo];
    ${$valor} = [$valor];
    ${$valor} = $dom->createTextNode($valor);
    ${$campo} = $dom->createElement($campo);
    ${$campo}->appendChild(${$valor});
}

$userNode = $dom->createElement("user");

$userNode->appendChild($email);
$userNode->appendChild($name);
$userNode->appendChild($lastname);
$userNode->appendChild($password);

$rootNode = $dom->createElement("root");

$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

$xml = $dom->saveXML();

//salva os dados em um arquivo XML

if ($model->returnDB($campos["email"]) == false) {

    $dom->save(dirname(__DIR__) . "./db/" . $campos["email"] . ".xml");

    header("Location://localhost/php/aplicationXML/public/welcome.php");

} else {

    header("Location://localhost/php/aplicationXML/public/validate.php");

}
