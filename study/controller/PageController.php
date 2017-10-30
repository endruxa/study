<?php
namespace App;

class PageController
{
    public function drawMenu()
    {
        $drawMenu = [['title' => 'Главная', 'href' => '/layouts/main.blade.php'],
            ['title' => 'About', 'href' => '/about.blade.php'],
            ['title' => 'Таблица умножения', 'href' => '/table.blade.php'],
            ['title' => 'Контакты', 'href' => '/phone.blade.php']];

        view( 'menu',['drawMenu' => $drawMenu]);
    }

    public function index()
    {
        view('index');
    }

    public function about()
    {
        view('about');
    }

    public function table()
    {
        $title = 'Юхууу';
        $pageTitle = 'Юхууу';


        $rows = 10;
        $cols = 10;
        $color = '#369';


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $rows = $_POST['rows'];
            $cols = $_POST['cols'];
            $color = $_POST['color'];
        }

        view('table', compact('rows', 'cols', 'color'));
    }
}