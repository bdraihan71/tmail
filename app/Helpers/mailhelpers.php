<?php
namespace App\Helpers;

class MailHelper
{
  public static function  mailValidator()
  {
    return [
      'target_mail' => 'required|email',
      'subject' => 'required',
    ];
  }
}
