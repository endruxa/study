<?php
namespace App;

class DrawMenu
{
public function DrawMenu($menu, $vertical = false)
  {
    $ulClass = 'navbar-nav mr-auto';
    $liClass = 'nav-item';

    if($vertical){
        $ulClass = 'list-group';
        $liClass = 'list-group-item';
    }

    echo "<ul class=\"$ulClass\">";
    foreach($menu as $item){
        echo "<li class=\"$liClass\">";
        echo "<a class=\"nav-link\" href=\"{$item['href']}\">{$item['title']} <span class=\"sr-only\">(current)</span></a>";
        echo "</li>";
    }
    echo "</ul>";
  }
}