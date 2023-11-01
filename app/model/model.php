<?php

class model
{
    public function getRoute($pag, $folder)
    {
        if (isset($pag) && isset($folder)) {
            return "../app/" . $folder . "/" . $pag . ".php";
        }
    }

    function validateAccount($email, $folder)
    {
        $file = simplexml_load_file("http://localhost/php/aplicationXML/app/db/$folder/$email.xml");

        if (isset($file) && !empty($file)) {

            return $file;
        } else {

            return false;
        }
    }

    function tranformXMLObject($email, $folder)
    {
        
        // xml file path
        $path = "http://localhost/php/aplicationXML/app/db/$folder/$email.xml";

        // Read entire file into string
        $xmlfile = file_get_contents($path);

        // Convert xml string into an object
        $new = simplexml_load_string($xmlfile);

        // Convert into json
        $con = json_encode($new);

        // Convert into associative array
        $newArr = json_decode($con, true);

        return $newArr;
    }

    function calcIMC($weight, $height) {
        // Calcula o IMC
        $base = $weight / ($height * $height);
        $imc = number_format($base, 1, '.', '');
    
        // Determina o nível de obesidade com base no IMC
        if ($imc < 18.5) {
            return " O seu imc é $imc  e se encontra (Abaixo do peso)";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            return "O seu imc é $imc  e se encontra (Peso normal)";
        } elseif ($imc >= 25 && $imc < 29.9) {
            return "O seu imc é $imc  e se encontra (Sobrepeso)";
        } elseif ($imc >= 30 && $imc < 34.9) {
            return "O seu imc é $imc  e se encontra (Obesidade Grau I)";
        } elseif ($imc >= 35 && $imc < 39.9) {
            return "O seu imc é $imc  e se encontra (Obesidade Grau II)";
        } else {
            return "O seu imc é $imc  e se encontra (Obesidade Grau III)";
        }
    }
    
}
