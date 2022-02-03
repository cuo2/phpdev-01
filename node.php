<?php

class Elect implements Electronics {
  private $model; 
   
  public function setModel($name) { 
    $this -> model = $name; 
  }  
  public function getModel() {
    return $this -> model; 
  }
}

$elect = new Elect();
$elect -> setModel('Electronics');

 
?>