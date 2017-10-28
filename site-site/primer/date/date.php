<?php
$day = date('d');
$month = date('m');
$year = date('Y');
$hour = (int) date('H');
$headerColor = '#369';


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
}