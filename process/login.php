<?php

$usuario = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

function login($usuario)
{
    $file = simplexml_load_file(__DIR__ . "./db/$usuario.xml");
    if (isset($file) && !empty($file)) {
        return $file;
    } else {
        return false;
    }
}

$xml = login($usuario);


if ($xml != false && $xml->user->password == $password) {

    header("Location:../public/welcome.php");
} else {

    header("Location:../public/error.php");
}
