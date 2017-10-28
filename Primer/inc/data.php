<?php

$day = date('d');
$month = date('m');
$year = date('Y');
$hour = (int) date('H');
$headerColor = '#369';

$menu = [
    ['title' => 'Домой', 'href' => '/'],
    ['title' => 'Таблица умножения', 'href' => '/index.php?p=table'],
    ['title' => 'Контакты', 'href' => '/index.php?p=contacts']
];

if(isAdmin()){
    $menu[] = ['title' => 'Выход', 'href' => '/logout.php'];
}else{
    $menu[] = ['title' => 'Вход', 'href' => '/login.php'];
}

$greet = 'Доброй ночи';

if($hour >= 6 && $hour < 12){
    $greet = 'Доброе утро';
    $headerColor = 'red';
}else if($hour >= 12 && $hour < 18){
    $greet = 'Добрый день';
    $headerColor = 'green';
}else if($hour >= 18 && $hour < 23){
    $headerColor = '#f60';
    $greet = 'Добрый вечер';
    $menu[] = ['title' => 'Колыханка', 'href' => 'https://www.youtube.com/watch?v=1X2dUnEp5Ag'];
}