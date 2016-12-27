<?php
/**
 * Created by PhpStorm.
 * User: Desawer
 * Date: 27.12.2016
 * Time: 20:51
 */

$data = array(
    mktime(20, 16, 11, 12, 27, 2016),
    mktime(12, 32, 55, 11, 24, 2016),
    mktime(14, 25, 22, 9, 25, 2016),
    mktime(15, 35, 56, 8, 26, 2016),
    mktime(16, 45, 32, 6, 23, 2016)
);

echo "Минимальный день: ". $data[4].'<br/>';


echo "Максимальный месяц:". $data[0]."<br/>";

echo '<br/><br/>';

sort($data);
foreach ($data as $key=>$val) {
    echo "Сортировка ключа: " . $key . " сортировка значений: " . $val .'<br/>';
    //echo "Максимальный месяц:". $item."<br/>";
}

echo "<br/>";

$selected = array_pop($data);
echo $selected.'<br/>';
echo "<br/>";
$convert = date('d.m.Y H:i:s', $selected);
echo $convert;
echo "<br/>";
echo "<br/>";
$timezone =  date_default_timezone_set('America/New_York');
echo date_default_timezone_get();