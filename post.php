<?php

//POST

$news='Четыре новосибирские компании вошли в сотню лучших работодателей
Выставка университетов США: открой новые горизонты
Оценку «неудовлетворительно» по качеству получает каждая 5-я квартира в новостройке
Студент-изобретатель раскрыл запутанное преступление
Хоккей: «Сибирь» выстояла против «Ак Барса» в пятом матче плей-офф
Здоровое питание: вегетарианская кулинария
День святого Патрика: угощения, пивной теннис и уличные гуляния с огнем
«Красный факел» пустит публику на ночные экскурсии за кулисы и по закоулкам столетнего здания
Звезды телешоу «Голос» Наргиз Закирова и Гела Гуралиа споют в «Маяковском»';
$news=  explode("\n", $news);
$count = count($news);



// Функция вывода всего списка новостей.
function allNews($allNews, $output='') {
    $output .= '<div style="border: 1px solid #bbb; border-radius: 8px;">';
    $output .= '<h3>Все новости</h3>';
    foreach ($allNews as $allNew) {
        $output .= '<p>' . $allNew . '</p>';
    }
    $output .= '</div>';
    return $output;
}
$allItem = allNews($news);

// Функция вывода конкретной новости.
function currentNews($curNews, $items='') {
    $items .= '<div style="border: 1px solid #bbb; border-radius: 8px; margin-top: 30px;">';
    $items .= '<h3>Конкретная новость</h3>';
    $items .= '<p>'.$curNews[$_POST['id']].'</p>';
    $items .= '</div>';
    return $items;
}
$currentItem = currentNews($news);

print_r($_POST);

function createForm($more='') {
    $more .= '<form method="post">';
    $more .= '<p>Поиск новостей</p>';
    $more .= '<input type="text" name="id">';
    $more .= '<input type="submit" value="Найти">';
    $more .= '</form>';
    return $more;
}
echo createForm();

if(empty($_POST['id'])) {
    unset($currentItem);
    header("HTTP/1.0 404 Not Found");
}

if($_POST['id'] <= $count) {
    if (isset($_POST['id'])) {
        echo $currentItem;
    }
} elseif($_POST['id'] > $count) {
    echo $allItem;
}



// Точка входа.
// Если новость присутствует - вывести ее на сайте, иначе мы выводим весь список

// Был ли передан id новости в качестве параметра?
// если параметр не был передан - выводить 404 ошибку
// http://php.net/manual/ru/function.header.php
?>
