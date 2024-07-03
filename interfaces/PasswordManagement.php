<?php 
namespace interfaces;


interface PasswordManagement {
  public function changePasword(string $currentPassword, string $newPassword): bool;
}
