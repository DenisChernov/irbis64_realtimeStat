<?php

    header('Content-type: application/json');

    require_once 'bdOper.php';
    $bd = new bdOper();
    $bd->getFilials();
    $shortFilName = array();
    for ($i = 0; $i < count($bd->filials); $i++)
    {
        $shortFilName["filial". $i] = str_replace("илиал", "", $bd->filials[$i]);
    }
    $shortFilName["count"] = count($shortFilName);

    print (json_encode($shortFilName));
?>