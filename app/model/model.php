<?php

class model
{
    function returnDB($usuario)
{
    $file = simplexml_load_file("http://localhost/php/aplicationXML/app/db/$usuario.xml");

    if (isset($file) && !empty($file)) {

        return $file;

    } else {
        
        return false;
    }
}
}