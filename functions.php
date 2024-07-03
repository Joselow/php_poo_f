<?php
// declare(strict_types=1) ;


$break = function() {
  echo '<br>';
};


$thePerson = [
  'name' => 'Jacinto',
  'age' => 45,
  // 'role' => 'dadaads'
];

$thePersonObject = (object)[
  'name' => 'Jacinto',
  'age' => 45,
  // 'role2' => [
  //   'juan' => 45
  // ]
  // 'role' => 'dadaads'
];

$originArray = [1,2,3,4,5];

function assignRol($data) { //& representa la referencia del parametro y no el valor
  global $thePersonObject;
  global $thePerson;

  if (is_array($data) && array_keys($data) !== range(0, count($data) - 1 )) {
    $data['role'] = 'KBRASO';
    var_dump($thePerson === $data);
  } else if (is_object($data) && get_class($data) === 'stdClass') {
    $data->role= 'KBRASO';
    var_dump($thePersonObject === $data);
  } else {
    return null;
  }

  // print_r($data);
}

$assingRoles = function ($data) use ($thePersonObject, $thePerson) { 
  if (is_array($data) && array_keys($data) !== range(0, count($data) - 1 )) {
    $data['role'] = 'KBRASO';
    var_dump($thePerson === $data);
  } else if (is_object($data) && get_class($data) === 'stdClass') {
    $data->role= 'KBRASO';
    var_dump($thePersonObject === $data);
  } else {
    return null;
  }
};


assignRol($thePersonObject);
$break();
assignRol($thePerson );
$break();
// assignRol($originArray );
$break();
print_r($thePersonObject);
$break();
print_r($thePerson);
$break();


$assingRoles($thePersonObject);
$break();

$assingRoles($thePerson);
$break();

// const STATES = ['PAID', 'PENDING'];
// const NAME = 'JUAN';

// echo STATES[1];
// $break();

// echo NAME[-4];


foreach ($thePerson as $i => $owo) {
  echo $i;
  $break();
  echo $owo;
  $break();
}
$break();
$break();

foreach ($thePersonObject as $i => $owo) {
  echo $i;
  $break();
  echo $owo;
  $break();
}


$propertyNames = array_keys(get_object_vars($thePersonObject));

print_r($propertyNames);
// foreach ($propertyNames as $index => $propertyName) {
//     $propertyValue = $thePersonObject->$propertyName;
    
//     echo "Iteración: " . ($index + 1) . "\n";
//     echo "Nombre de la propiedad: " . $propertyName . "\n";
//     echo "Valor: " . $propertyValue . "\n";
// }
$break();

$break();

$array = [1, 2, 3, 4, 5];
// echo print_r(array_splice($array, -1)); // Elimina el último elemento
// echo array_pop($array);
unset($array[count($array) - 1]); 
$break();

print_r($array); // Resultado: [1, 2, 3, 4]


// function operation (int num1, int num2) {

// }

$operation = function (int | bool $num1, float $num2): bool | int   {
  return $num1 + $num2;
};

$break();
$break();

echo(var_dump($operation('false', '74')));

#?>