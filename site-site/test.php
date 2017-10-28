
<?php
    function __autoload($class)
    {
        echo " <h1>{$class}</h1>";
        require_once("Test/Class/AbstractCar.php");
        require_once("Test/Class/Car.php");
        require_once("Test/Class/SportCar.php");
    }

    $a = new SportCar('Shumaher', 'Zonda', 'Ferrary', 350, '');
    echo $a->showcar();
