<?php
$page = getRequest('p', 'index');
$title = 'Главная';
$pageTitle = "$greet, сегодня $day день $month месяц $year год";
$include = "views/index.view.php";

switch($page){
    case 'table':
        $title = 'Таблица умножения';
        $pageTitle = "Таблица умножения";
        $include = 'views/table.view.php';
        break;
    case 'contacts':
        $title = 'Связаться с нами';
        $pageTitle = "Связаться с нами";
        $include = 'views/contacts.view.php';
        break;
}