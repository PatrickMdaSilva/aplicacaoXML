<?php
require_once("../model/model.php");

$model = new model;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$xml = $model->returnDB($email);


if ($xml != false && $xml->user->password == $password) {

    
    $arrayUser = $model->tranformXMLObject($email);
    
    session_start();
    $_SESSION["email"] = $arrayUser["user"]["email"];
    $_SESSION["name"] = $arrayUser["user"]["name"];
    

    header("Location://localhost/php/aplicationXML/public/welcome.php");
} else {

    header("Location://localhost/php/aplicationXML/public/error.php");
}
