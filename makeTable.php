<?php
    require_once('tables.php');
    $tbl = new tables();

    $index = $_POST['tabindex'];

    //$table = '<div id="tab_'. $index. '">'.
    $table =
             $tbl->makeHeader_part1($index).
             $tbl->fillNumbers($index, 1, 47, 0, 0).
             $tbl->fillCaption($index, "Состоит к_нач.мес.", 1, 47, 0).
             $tbl->fillNumbers($index, 0, 47, 1, 1).
             $tbl->fillCaption($index, "Всего за_месяц", 1, 47, 32).
             $tbl->fillCaption($index, "Итого за_год", 1, 47, 33).
             $tbl->bottomTable();

    print ($table);
?>