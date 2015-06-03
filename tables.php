<?php

class tables {

    var $day = 31;

    function tables()
    {

    }

    function makeHeader_part1($tab)
    {
        $header =
        '<table id="diary_part1_tab'. $tab. '">
        <tr>
                 <td colspan="1" rowspan="4">
                         <svg width="12" height="160" class="svg-text">
                            <text x="-120" y="10" transform="rotate(-90)">Числа месяца</text>
                         </svg>
                 </td>
                 <td rowspan="4">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-130" y="24" transform="rotate(-90)">Всего записалось</text>
                         </svg>
                 </td>
                 <td rowspan="4">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-115" y="24" transform="rotate(-90)">В т.ч.новых</text>
                         </svg>
                 </td>
                 <td colspan="13" height="20">Пользователи по составу</td>
                 <td colspan="7" height="20">В том числе </td>
                 <td colspan="14" height="20"></td>
                 <td colspan="10" height="20">Посещения</td>
              </tr>
              <tr>
                 <td colspan="9" height="20"></td>
                 <td colspan="4" height="20">Учащиеся</td>
                 <td rowspan="3">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-130" y="24" transform="rotate(-90)">Дети до 14 лет вкл.</text>
                         </svg>
                 </td>
                 <td rowspan="3">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-130" y="24" transform="rotate(-90)">Юнош. 15-24 вкл.</text>
                         </svg>
                 </td>
                 <td colspan="5">Социально незащищ.</td>

                 <td colspan="2">Внеста-<br>ционарно</td>
<!--                 <td colspan="1" rowspan="3">
                     <svg width="40" height="160" class="svg-text">
                        <text x="-130" y="24" transform="rotate(-90)">Пользователи СПС</text>
                     </svg>
                 </td>-->
                 <td colspan="7">По образованию</td>
                 <td colspan="1" rowspan="3">
                     <svg width="40" height="160" class="svg-text">
                        <text x="-130" y="24" transform="rotate(-90)">Заочное обучение</text>
                     </svg>
                 </td>
                 <td colspan="4">Пользователи</td>
                 <td colspan="1" rowspan="3">
                     <svg width="40" height="160" class="svg-text">
                        <text x="-130" y="24" transform="rotate(-90)">Всего</text>
                     </svg>
                 </td>
                 <td colspan="8">В том числе</td>
                 <td colspan="1" rowspan="3">
                     <svg width="40" height="160" class="svg-text">
                        <text x="-130" y="24" transform="rotate(-90)">Интернет</text>
                     </svg>
                 </td>

              </tr>
              <tr>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-94" y="24" transform="rotate(-90)">ИТР</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-130" y="24" transform="rotate(-90)"><tspan x="-142" y="14">Планово-финансовые</tspan><tspan x="-150" y="34"> работники, экономисты</tspan></text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-160" y="24" transform="rotate(-90)">Врачи, сред. мед. персонал</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="180" class="svg-text">
                            <text x="-172" y="24" transform="rotate(-90)">Преподаватели, воспитатели</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-110" y="24" transform="rotate(-90)">Юристы</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Спец. др. профессий</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-110" y="24" transform="rotate(-90)">Рабочие</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-120" y="24" transform="rotate(-90)">Служащие</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-104" y="24" transform="rotate(-90)">Прочие</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-124" y="24" transform="rotate(-90)">Высших проф.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-128" y="24" transform="rotate(-90)">Средних проф.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-120" y="24" transform="rotate(-90)">Общеобраз.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-114" y="24" transform="rotate(-90)">Нач. проф</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-124" y="24" transform="rotate(-90)">Пенсионеры</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-130" y="24" transform="rotate(-90)">Взрос. инвалиды</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Сироты дети до 14 л.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-150" y="24" transform="rotate(-90)">Инвалиды дети до 14 л.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Инвалиды 15-24 вкл.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Инвалиды</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Пенсионеры</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Высшее проф.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Среднее проф.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Нач. проф.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)"><tspan x="-142" y="14">Среднее (полное)</tspan><tspan x="-150" y="34">общее</tspan></text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Осн. общее</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Начальное</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Дошкольники</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">ЕФ</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">МБА</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">СПС</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">On-line</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Дети до 14 л. вкл.</text>
                         </svg>
                 </td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Юнош. 15-24 лет вкл.</text>
                         </svg>
                 </td>
                 <td colspan="3">Инвалиды</td>
                 <td colspan="2">Внеста-<br>ционарно</td>
                 <td rowspan="2">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)"><tspan x="-142" y="14">На массовых</tspan><tspan x="-150" y="34">мероприятиях</tspan></text>
                         </svg>
                 </td>
               </tr>
                 <tr>
                 <td rowspan="1">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Взрослые</text>
                         </svg>
                 </td>
                 <td rowspan="1">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Дети до 14.л. вкл</text>
                         </svg>
                 </td>
                 <td rowspan="1">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)"><tspan x="-142" y="14">Юношество</tspan><tspan x="-150" y="34">15-24 вкл.</tspan></text>
                         </svg>
                 </td>
                 <td rowspan="1">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Инвалиды</text>
                         </svg>
                 </td>
                 <td rowspan="1">
                         <svg width="40" height="160" class="svg-text">
                            <text x="-140" y="24" transform="rotate(-90)">Пенсионеры</text>
                         </svg>
                 </td>
                 </tr>

                <tr></tr>';
        return $header;
    }

    function makeHeader_part2()
    {


    }

    /*
     * direction: 1 - горизонтально, 0 - вертикально
     * $fillcol: 1 - создавать пустые ячейки, 0 - не создавать
     */
    function fillNumbers($tab, $direction, $count, $fillCol, $incolor)
    {
        $table =  '<tr>';
        for ($i = 1; $i <= ($fillCol === 1 ? $this->day : $count); $i++)
        {
            if ($direction === 0)
                $table .= '<tr>';

            if ($i % 2 === 0)
//                echo '<td id="col_'. $i. "_row_". $row. " ". ($incolor === 1 ? 'bgcolor="#CCFFFF"' : ''). '>'. $i. '</td>';
                $table .= '<td '. ($incolor === 1 ? 'bgcolor="#CCFFFF"' : ''). '>'. $i. '</td>';
            else
                $table .= '<td>'. $i. '</td>';

            if ($fillCol === 1)
                for ($j = 1; $j < $count ; $j++)
                    if ($i % 2 === 0)
                        $table .= '<td id="tab_'. $tab. '_col_'. $j. "_row_". $i. '" '. ($incolor === 1 ? 'bgcolor="#CCFFFF"' : ''). '>&nbsp;</td>';
                    else
                        $table .= '<td id="tab_'. $tab. '_col_'. $j. "_row_". $i. '">&nbsp;</td>';

            if ($direction === 0)
                $table .= '</tr>';
        }
        $table .= '</tr>';

        return $table;
    }

    /*
     * direction: 1 - горизонтально, 0 - вертикально
     * $caption: заголовок
     */
    function fillCaption($tab, $caption, $direction, $count, $row)
    {
        $table = '<tr>';
        for ($i = 1; $i <= $count; $i++)
        {
            if ($direction === 0)
                $table .= '<tr>';

            $table .= ($i === 1 ? '<td height="64">
                                <svg width="40" height="70" class="svg-text">
                                    <text transform="rotate(-90)"><tspan x="-60" y="14">'. str_replace('_', '</tspan><tspan x="-56" y="34">', $caption). '</tspan></text></svg></td>' : '<td  id="tab_'. $tab. '_col_'. ($i-1). '_row_'. $row. '">&nbsp;</td>');

            if ($direction === 0)
                $table .= '</tr>';
        }
        $table .= '</tr>';

        return $table;
    }

    function bottomTable()
    {
        $table = '</table>';

        return $table;
    }
}