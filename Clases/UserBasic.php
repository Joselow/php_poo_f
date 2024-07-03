<?php
namespace Clases;

use interfaces\UserAuth;

require_once('./interfaces/UserAuth.php');


class UserBasic implements UserAuth{
  public function login($username, $password)  {
    
  }
  public function logout()  {
    
  }
  public function changePasword($currentPassword, $newPassword): bool  {
    return false;
  }

  public function sendEmail(string $content, object $attachement): bool
  {
    return true;
  }
}