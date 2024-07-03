<?php
namespace Clases;

class Collection {
  function __construct(
    public array $books = [],
  ){}
  
  public function addBook(Book $newBook) : void {
    $books[] = $newBook;    
  }

  public function deleteBook($isbn): bool {
    $foundIndex = null;

    foreach ($this->books as $index => $book) {
      if ($book->isbn === $isbn) {
          $foundIndex = $index;
          break;
      }
    }
    if ($foundIndex) {
      array_splice($this->books, $foundIndex, 1);
      return true;
    }
    return  false;
  }

  public function list() : array {
    return $this->books;
  }
}

