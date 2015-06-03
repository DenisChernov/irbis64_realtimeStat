<?php

    header('Content-type: application/json');

    $index = $_POST['index'];
    require_once 'bdOper.php';
    $bd = new bdOper();
    $bd->getFilials();
    $bd->getSubDivision($bd->filials[$index - 1]);

    $result = array();
    $result["count"] = count($bd->filStruct);

    for ($i = 0; $i < count($bd->filStruct); $i++)
    {
        $result["division". $i] = $bd->filStruct[$i];
    }
    print (json_encode($result));


?>