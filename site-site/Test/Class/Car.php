<?php

class Car extends AbstractCar
{
    public $model;
    public $mark;
    public $speed;
    public $measure;

    public function __construct($model, $mark, $speed, $measure='km/h')
    {
        $this->model = $model;
        $this->mark = $mark;
        $this->speed = $speed;
        $this->measure = $measure;
    }

    public function show()
    {
        echo "<p>Модель: " . $this->model."</br>";
        echo "<p>Марка: " . $this->mark."</br>";
        echo "<p>Скорость: " . $this->getSpeed();
        echo "<hr>";
    }

    public function getSpeed()
    {
        return $this->speed . $this->measure;
    }
}

