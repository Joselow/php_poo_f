<?php
namespace Clases;


class User {
  protected $tokenPrivate = null;
  protected $collection = null;

  function __construct(
    public $username,
    protected $password
  ){}

  public function login(string $username,string $password): bool {
    if ($this->tokenPrivate) return true;

    if ($this->username === $username && $this->password === $password) {
      $this->tokenPrivate = bin2hex(random_bytes(32));
      return true;
    }

    return false;
  }

  public function logout() : void {
    $this->tokenPrivate = null;
  }

  public function updateCollection(Collection $collection) {
    if ($this->tokenPrivate) {
      $this->collection = $collection;
      echo 'You added a new collection' ;
    }
    else {
      echo 'You need to be logued' ;
    }
  }

  public function getCollection(): null | array  {
    if ($this->tokenPrivate && $this->collection) {
      return $this->collection->list();
    }
    else {
      echo 'You need to be logued' ;
      return null;
    }
  }
}



