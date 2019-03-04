<?php
  class User {
    public $username;
    public $password;
    static public $passwordLength = 5;

    public static function getPasswordLength(){
      return self::$passwordLength;
    }
  }

  echo User::getPasswordLength();