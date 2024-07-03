<?php 
namespace interfaces;

use interfaces\EmailManagement;
use interfaces\PasswordManagement;

// require_once('EmailManagement.php');
// require_once('PasswordManagement.php');

interface UserAuth extends PasswordManagement, EmailManagement {
  public function login(string $username, string $password);
  public function logout();
}


