<?php
require_once "includes/config.php"; //подключение файла

error_reporting(E_ALL);
if (!file_exists($traffic_file_name)) //проверка на существование файла
{
    $smarty->assign('title', 'Трафик. Файл не существует');//передача переменной в шаблонизатор
    $smarty->assign('head', "Файла '$traffic_file_name' не существует!");
}
else{//если файл существует
    $fp = fopen($traffic_file_name,"r");//открытие файла только для чтения

    for($i = 0; !feof($fp); $i++)//цикл выполняется пока не будет признака конца файла
    {
        $line = fgets($fp);//считывание след. строки из файла

        if($line == ""){//если строка пуста продолжить считывание
            $i--;
            continue;
        }

        $mas =  explode("\t",$line);//получить массив строк при помощи делителя

        $mas_traffic[$i]["client"] = $mas[0];
        $mas_traffic[$i]["output"] = round($mas[3]/1024, 2);//преобразование в Гб
        $mas_traffic[$i]["input"] = round($mas[2]/1024, 2);//преобразование в Гб
        $mas_traffic[$i]["limit"] = $mas[1];
        //расчитывание суммы к оплате в зависимости от схемы подключения(limit)
        switch($mas_traffic[$i]["limit"]){
            case "FLAT": $mas_traffic[$i]["toPay"] = round($mas[4],2); break;
            case "600" : $mas_traffic[$i]["toPay"] = round(($mas[2] < 600)? 30: $mas[2] / 1000 * 50, 2); break;
            case "PURE": $mas_traffic[$i]["toPay"] = round($mas[2] / 1000 * 85, 2); break;
            case "756" : if($mas[2] < 750)
                            $mas_traffic[$i]["toPay"] = 73.33;
                         elseif($mas[2] <= 1000)
                            $mas_traffic[$i]["toPay"] = 55;
                         elseif($mas[2] <= 2000)
                            $mas_traffic[$i]["toPay"] = round(55 * $mas[2] / 1000, 2);
                         else $mas_traffic[$i]["toPay"] = round($mas[2] / 1000 * 60, 2); break;
            case "1000":
            case "2000":{
                         if($mas[2] <= 1000)
                            $mas_traffic[$i]["toPay"] = 55;
                         elseif($mas[2] <= 2000)
                            $mas_traffic[$i]["toPay"] = round( ($mas[2]+$mas[3]) / 1000 * 55, 2);
                         elseif($mas[2] <= 10000)
                             $mas_traffic[$i]["toPay"] = round(($mas[2]+$mas[3]) / 1000 * 60, 2);
                         else $mas_traffic[$i]["toPay"] = round(($mas[2]+$mas[3]) / 1000 * 53 * (110 - ($mas[2]+$mas[3]) / 1000) / 100, 2);
                        } break;
            default : $mas_traffic[$i]["toPay"] = 0; break;
        }

        $mas_traffic[$i]["kurs"] = 28.30;// курс для перерасчета суммы в гривны
        $mas_traffic[$i]["sum"] = round( $mas_traffic[$i]["toPay"] * $mas_traffic[$i]["kurs"], 2);
        $mas_traffic[$i]["nds"] = round( $mas_traffic[$i]["sum"] * 0.2, 2);//НДС 20% от суммы
        $mas_traffic[$i]["sum_nds"] = $mas_traffic[$i]["nds"] + $mas_traffic[$i]["sum"];
    }

    fclose($fp);

    $smarty->assign('title', 'Трафик по выделенным линиям');
    $smarty->assign('head', 'Трафик по выделенным линиям');
    $smarty->assign('mas_traffic', $mas_traffic);//передача массива в шаблонизатор для вывода
}

$smarty->display("$path/lab4/temp/smarty/templates/traffic.tpl");//вызов отображения шаблона
