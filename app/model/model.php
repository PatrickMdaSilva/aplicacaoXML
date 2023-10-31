<?php

class model
{
    function returnDB($email)
    {
        $file = simplexml_load_file("http://localhost/php/aplicationXML/app/db/$email.xml");

        if (isset($file) && !empty($file)) {

            return $file;
        } else {

            return false;
        }
    }

    function tranformXMLObject($email)
    {
        
        // xml file path
        $path = "http://localhost/php/aplicationXML/app/db/$email.xml";

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
}
