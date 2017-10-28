<?php

class SportCar extends Car
{
    public $driver;

    public function __construct($driver, $model, $mark, $speed, $measure='km/h')
    {
        $this->driver = $driver;
        parent::__construct($model, $mark, $speed, $measure='km/h');
    }


    public function showcar()
    {
        echo "Водитель: ".$this->driver."</br>";
        parent::show();
    }
}