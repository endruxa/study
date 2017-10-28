@extends('layouts.main')

@section('title', 'Начаьльная страница')

@section('menu')
   <?= @$menu = [
    ['title' => 'Main', 'href' => 'main.blade.php'],
    ['title' => 'Таблица умножения', 'href' => '/table.blade.php'],
    ['title' => 'Контакты', 'href' => '/phone.blade.php'],
    ['title' => 'About', 'href' => '/about.blade.php']
    ];

@$drawmenu = new \App\DrawMenu();
@$drawmenu->DrawMenu(false);

@endsection