<?php

//POST

$news='������ ������������� �������� ����� � ����� ������ �������������
�������� ������������� ���: ������ ����� ���������
������ �������������������� �� �������� �������� ������ 5-� �������� � �����������
�������-������������ ������� ���������� ������������
������: �������� �������� ������ ��� ����� � ����� ����� ����-���
�������� �������: �������������� ���������
���� ������� �������: ��������, ������ ������ � ������� ������� � �����
�������� ����� ������ ������� �� ������ ��������� �� ������ � �� ��������� ���������� ������
������ ������� ������ ������ �������� � ���� ������� ����� � �����������';
$news=  explode("\n", $news);
$count = count($news);



// ������� ������ ����� ������ ��������.
function allNews($allNews, $output='') {
    $output .= '<div style="border: 1px solid #bbb; border-radius: 8px;">';
    $output .= '<h3>��� �������</h3>';
    foreach ($allNews as $allNew) {
        $output .= '<p>' . $allNew . '</p>';
    }
    $output .= '</div>';
    return $output;
}
$allItem = allNews($news);

// ������� ������ ���������� �������.
function currentNews($curNews, $items='') {
    $items .= '<div style="border: 1px solid #bbb; border-radius: 8px; margin-top: 30px;">';
    $items .= '<h3>���������� �������</h3>';
    $items .= '<p>'.$curNews[$_POST['id']].'</p>';
    $items .= '</div>';
    return $items;
}
$currentItem = currentNews($news);

print_r($_POST);

function createForm($more='') {
    $more .= '<form method="post">';
    $more .= '<p>����� ��������</p>';
    $more .= '<input type="text" name="id">';
    $more .= '<input type="submit" value="�����">';
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



// ����� �����.
// ���� ������� ������������ - ������� �� �� �����, ����� �� ������� ���� ������

// ��� �� ������� id ������� � �������� ���������?
// ���� �������� �� ��� ������� - �������� 404 ������
// http://php.net/manual/ru/function.header.php
?>
