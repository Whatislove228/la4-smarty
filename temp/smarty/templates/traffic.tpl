<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//RU" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>{$title}</title>{*{$title} - вывод переданной переменной*}
</head>
<body>

<div id="reg">{$head}</div>

{if isset($mas_traffic)} {*проверка на существование переданной переменной *}
    <div id='traffic'>
        <table width=80% border="1" align='center' cellspacing='0' cellpadding='4'>
            <tr height=35 id="table_head" align='center'>
                <td>Организация</td>
                <td>Output, GB</td>
                <td>Input, GB</td>
                <td>Limit, MB</td>
                <td>toPay, y.e.</td>
                <td>Курс</td>
                <td>Сумма без НДС, grn</td>
                <td>НДС, grn</td>
                <td>Сумма с НДС, grn</td>
            </tr>
    {*цикл по строкам; item - имя переменной, которая
    будет значением текущего элмента; from - указыв. массив*}
    {foreach from=$mas_traffic item=line}
        <tr>
        {foreach from=$line item=item}{*цикл по столбцам*}
              <td>{$item}</td>
        {/foreach}
        </tr>
    {/foreach}

        </table>
    </div>
{/if}

</body>
</html>