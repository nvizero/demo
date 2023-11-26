<?php

class Car
{
  public $color;
  public $model;

  public function __construct($color, $model)
  {
    $this->color = $color;
    $this->model = $model;
  }

  public function getMessage()
  {
    return "我的車是一輛 " . $this->color . " " . $this->model . "！";
  }
}

$myCar = new Car("黑色", "豐田");
echo $myCar->getMessage();
