<?php 
namespace interfaces;


interface EmailManagement {
  public function sendEmail(string $content, object $attachement): bool;
}
