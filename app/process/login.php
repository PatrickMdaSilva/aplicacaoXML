<?php
require_once("../model/model.php");

$model = new model;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$folder = "user";
$xml = $model->validateAccount($email, $folder);


if ($xml != false && $xml->user->password == $password) {

    $folder = "user";
    $arrayUser = $model->tranformXMLObject($email, $folder);
    
    session_start();
    $_SESSION["email"] = $arrayUser["user"]["email"];
    $_SESSION["name"] = $arrayUser["user"]["name"];
    

    header("Location://localhost/php/aplicationXML/public/index.php?pag=welcome&folder=templates");
} else {

    header("Location://localhost/php/aplicationXML/public/index.php?pag=error&folder=templates");
}
