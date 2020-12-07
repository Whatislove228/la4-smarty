<h1>111</h1>

<?php
$path = '';//дериктория корня документа выполн. скрипта
echo '<pre>';
print_r($path);
echo '</pre>';
//подлючение класса смарти
require_once "Smarty/Smarty.class.php";

$smarty = new Smarty();// создание обьекта смарти
//указание конфигур. дерикторий смарти
$smarty->template_dir = "temp/smarty/templates";
$smarty->compile_dir = "temp/smarty/templates_c";
$smarty->cache_dir = "temp/smarty/cache";
$smarty->config_dir = "temp/smarty/config";

$file_name = "data/data.txt";
//полное имя файла с данными по трафику
$traffic_file_name = "data/traffic.db";

