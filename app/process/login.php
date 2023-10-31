<?php
require_once("../model/model.php");

$model = new model;

$usuario = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$xml = $model->returnDB($usuario);


if ($xml != false && $xml->user->password == $password) {

    header("Location://localhost/php/aplicationXML/public/welcome.php");
} else {

    header("Location://localhost/php/aplicationXML/public/error.php");
}
