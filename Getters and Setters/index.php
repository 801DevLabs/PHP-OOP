<?php
  class Person {
    public $name;
    public $email;

    public function setName($name){
      $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email;
    }
  }

  $person1 = new Person;

  $person1->setName('Tom Haverford');
  $person1->setEmail('tom@gmail.com');

  echo 'Name: ' . $person1->getName() . ' Email: ' . $person1->email;