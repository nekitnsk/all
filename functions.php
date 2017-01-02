<?php
/**
 * Created by PhpStorm.
 * User: Desawer
 * Date: 01.01.2017
 * Time: 20:54
 */

//Создаём массив с содержимым
$products = array(
    array(
        'name' => 'Игрушка мягкая мишка',
        'price' => mt_rand(1, 10),
        'quantity' => mt_rand(1, 10),
        'ostatok' => mt_rand(0, 10),
        'sale' => mt_rand(0, 3)
    ),
    array(
        'name' => 'Детская куртка',
        'price' => mt_rand(1, 10),
        'quantity' => mt_rand(1, 10),
        'ostatok' => mt_rand(0, 10),
        'sale' => mt_rand(0, 3)
    ),
    array(
        'name' => 'Детский велосипед',
        'price' => mt_rand(1, 10),
        'quantity' => mt_rand(1, 10),
        'ostatok' => mt_rand(0, 10),
        'sale' => mt_rand(0, 3)
    ),
);
$productTitles = array('Наименование товара', 'Цена', 'Количество заказа', 'Остаток на складе', 'Скидка');

function totalSection($items, $output = '') {
    $output .= '<div class="col-md-12" style="background: #e5efff; border: 1px solid #bbb; border-radius: 5px;">';
    $output .= '<h3>Итого</h3>';
    $output .= '<table class="table">';
    $output .= '<tr>';
    $output .= '<th>Общая сумма</th>';
    $output .= '<th>Общее количество товара</th>';
    $output .= '</tr>';
    $lasts = end($items);
    // в этом моменте я не знаю как посчитать последний элемент скидку, точнее я не смог засунуть его в последний элемент
    //$newArrayLasts = $lasts['price'] - $lasts['price'] * 0.3;
    foreach ($items as $item) {
        $sum[] =  ($item['price'] - $item['price'] * $item['sale'] / 100) * $item['quantity'];
        $sumQuantity[] = $item['quantity'];
    }
    $output .=  '<td>'. array_sum($sum) . '$' .'</td>';
    $output .= '<td>'. array_sum($sumQuantity) . 'шт' .'</td>';
    $output .= '</table>';
    $output .= '</div>';
    return $output;
}

function notification($notifiers, $str='', $mores='') {
    foreach ($notifiers as $notifier) {
        $results = array_unique($notifier);
        static $int = 8;
        if($results['quantity'] > $int) {
            $str .= '<div class="col-md-12" style="background: #ffe5e5; border: 1px solid #bbb; border-radius: 5px; margin-top: 30px">';
            $str .= '<h3>Уведомление</h3>';
            $str .= "<p>Количество заказываемых товаров превышающее 10шт и более не может быть оформлено, так как на скаладе максимальное количество товаров 10шт</p>";
        }
        $int++;
    }
    $mores .= $str;
    $mores .= '</div>';
    return $mores;
}

$sales .= '<div class="col-md-12" style="background: #c9ffcc; border: 1px solid #bbb; border-radius: 5px; margin-top: 30px">';
$sales .= '<h3>Скидка</h3>';
$sales .= '<p>Вы заказали '. $discounts[2]['name'] .' 3 шт либо более вам начислена скидка на эту позицию в размере 30%'.'</p>';
$sales .= '</div>';

function discount($discounts) {
    if($discounts[2]['quantity'] >= 3) {
        global $sales;
        return $sales;
    }
}

