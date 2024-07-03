<?php
namespace Clases;

class Appliance {
  public static $name = 'Electródomestico';

  public static function getInfo() {
    echo "clase: ".self::$name." función: producto";
  }
}

