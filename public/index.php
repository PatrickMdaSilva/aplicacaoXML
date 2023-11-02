<?php
require_once("../globals.php");
require_once("../app/templates/header.php");
require_once("../app/model/model.php");

$model = new Model();


    if(isset($_GET['pag']) && isset($_GET['folder'])){

        $pag = $_GET['pag'];
        $folder = $_GET['folder']; 
        $road = $model->getRoute($pag, $folder);

        require_once($road);

    } elseif (!isset($_GET['pag'])){
        
        require_once( "../app/templates/home.php");
        
    }
