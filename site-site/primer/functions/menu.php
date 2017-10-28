<?php
function drawmenu($menu, $vertical = false)
{
    $menu = array("Home" => "index.php", "Link" => "test.php", "Таблица умножения" => "table.php");
    $ulclass = 'navbar-nav mr-auto';
    $liclass = 'nav-item';
    if ($vertical)
    {
        $ulclass = 'list-group ';
        $liclass = 'list-group-item';
    }
    echo "<ul class = \"$ulclass\">";
    foreach ($menu as $link => $href) {
        echo "<li class=\"$liclass\">";
        echo "<a class=\"nav-link\" href= \"$href\">$link<span class=\"sr-only\">(current)</span></a>";
        echo "</li>";
    }
    echo "</ul>";
}

