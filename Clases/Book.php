<?php
namespace Clases;


class Book {
  function __construct(
    public $isbn,
    public $name,
    public $author,
    public $year
  ){}

  public function about() : string {
    return "The book :'$this->name' was wrote by $this->author on $this->year";
  }
}