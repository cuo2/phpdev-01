<?php

class miniCar implements Car {
  private $model; 
   
  public function setModel($name) { 
    $this -> model = $name; 
  }  
  public function getModel() {
    return $this -> model; 
  }
}

$car = new miniCar();
$car -> setModel('Mercedes Benz');

 
?>