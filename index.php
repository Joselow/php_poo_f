<?php
require 'vendor/autoload.php';

use Clases\User;
use Clases\UserBasic;
use Clases\Collection;
use Clases\Book;
use Clases\Appliance;
use Clases\Blender;

$break = function(int $times = 1) {
  for ($i = 0; $i < $times; $i++) {
    echo '<br>';
  }
};

function books() {
  global $break;

  $theUser = new User(username: 'Juano', password: '787878');
  
  $book1 = new Book('978-3-16-148410-0', 'The Great Gatsby', 'F. Scott Fitzgerald', 1925);
  $book2 = new Book('978-1-56619-909-4', 'To Kill a Mockingbird', 'Harper Lee', 1960);
  $book3 = new Book('978-0-7432-7356-5', '1984', 'George Orwell', 1949);
  $book4 = new Book('978-0-452-28423-4', 'Pride and Prejudice', 'Jane Austen', 1813);
  $book5 = new Book('978-0-316-76948-0', 'The Catcher in the Rye', 'J.D. Salinger', 1951);
  $book6 = new Book('978-0-7432-7355-8', 'Moby-Dick', 'Herman Melville', 1851);
  
  $newCollection = new Collection([$book1, $book2]);
  
  $theUser->login(password:'787878', username: 'Juano');
  $theUser->updateCollection($newCollection);
  
  $collection = $theUser->getCollection();
  
  foreach($collection as $book) {
    echo  $book->about() . $break();
  }
}

$traits =  function () use ($break) {
  // $newUSer = new UserBasic();
  trait Saludo {
    public function saludar() {
        return "¡Hola! mundo cruel";
    }
  }
  
  class ClasePadre {
    use Saludo;
  }
  
  class ClaseHija extends ClasePadre {}
  
  $claseHija = new ClaseHija();
  echo $claseHija->saludar();   
};

$staticClases = function () use ($break) {
  Appliance::getInfo();
  $break();
  echo Appliance::$name;  

  $break();
  $newBlender = new Blender;
  $newBlender->seeInfo();
  $break();
  // Mal uso
  // $newBlender->getInfo();
  // $newBlender::getInfo();
  
  // Buen uso
  Blender::getInfo();
};


books();

$break(2);

$traits();

$break(2);

$staticClases();






