<?php

    $name = 'Azamat';
    $age = 22;

    unset($name, $age);

    define("MYCONST",     "somethinglikethat");

    echo MYCONST.'<br>';

    // Изменить не получится выведит ошибку

    $books = array('title'=>'PHP','author'=>'Met Zandstra','pages'=>'520');

        echo 'Недавно я прочитал '. $books['title'] . ' автором является ' . $books['author'] .' общее количество страниц: ' . $books['pages'].'<br>';


    $secondBooks = array(
        array('title'=>'Харизма','author'=>'Наталья Кузьмина','pages'=>'450'),
        array('title'=>'JS & JQuery','author'=>'Дэвид Макфарлан','pages'=>'861')
    );

        $summPages =  $secondBooks[0]['pages'] + $secondBooks[1]['pages'];

        echo 'Недавно я прочитал книги ' . $secondBooks[0]['title'] . ' и ' . $secondBooks[1]['title'] . ' автором которого являются '  . $secondBooks[0]['author'] . ' и ' . $secondBooks[1]['author'] .  ' общая сумма страниц составляет: '.$summPages;





?>