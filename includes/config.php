<h1>111</h1>

<?php
$path = $_SERVER[ 'DOCUMENT_ROOT'];//дериктория корня документа выполн. скрипта
//подлючение класса смарти
require_once "$path/smarty/Smarty.class.php";

$smarty = new Smarty();// создание обьекта смарти
//указание конфигур. дерикторий смарти
$smarty->template_dir = "$path/temp/smarty/templates";
$smarty->compile_dir = "$path/temp/smarty/templates_c";
$smarty->cache_dir = "$path/temp/smarty/cache";
$smarty->config_dir = "$path/temp/smarty/config";

$file_name = "data/data.txt";
//полное имя файла с данными по трафику
$traffic_file_name = "data/traffic.db";

