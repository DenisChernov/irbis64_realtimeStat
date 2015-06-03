<?php
    header('Content-type: application/json');

    $division = $_POST["div"];

    require_once('bdOper.php');
    $bd = new bdOper();
    $bd->connect();

    $monthResult = array();
    $result = array();


/*
    for ($i = 1; $i <= 31; $i++)
    {
            $bd->getRegs(date("Ym"). ($i < 10 ? "0". $i : $i), $division);
            $monthResult["day". ($i < 10 ? "0". $i : $i)] = count($bd->count);
    }

    $result["v51"] = $monthResult;
    unset ($monthResult);

    for ($i = 1; $i <= 31; $i++)
    {
        $bd->getReRegs(date("Ym"). ($i < 10 ? "0". $i : $i), $division);
        $monthResult["day". ($i < 10 ? "0". $i : $i)] = count($bd->count);
    }
    $result["v52"] = $monthResult;


    for ($cat = 1; $cat <= 13; $cat++)
    {
        unset ($monthResult);
        for ($i = 1; $i <= 31; $i++)
        {
            $monthResult["day". ($i < 10 ? "0". $i : $i)] = $bd->getCategory(date("Ym"). ($i < 10 ? "0". $i : $i), $division, $cat);
        }

        $result["v50_". $cat] = $monthResult;
    }

    for ($edu = 1; $edu <= 8; $edu++)
    {
        unset ($monthResult);
        for ($i = 1; $i <= 31; $i++)
        {
            $monthResult["day". ($i < 10 ? "0". $i : $i)] = $bd->getEducation(date("Ym"). ($i < 10 ? "0". $i : $i), $division, $edu);
        }

        $result["v20_". $edu] = $monthResult;
    }


    $result["division"] = $division;
    $result["year_month"] = date("Ym");
*/
    for ($i = 1; $i <= 31; $i++)
        $result["day_". $i] = $bd->getRowFromDiary($division, 1, 7, $i);

    $bd->disconnect();
    print(json_encode($result));