<?php
namespace Clases;

class Blender extends Appliance {
  public function seeInfo() {
    // echo 'aea'. parent::$name;
    echo "Clase: " . parent::$name . ', Licuadora' . " función: producto";
  }

  public function __destruct() {
    echo "<br> Instancia de Licuadora destruida.";
}
}

