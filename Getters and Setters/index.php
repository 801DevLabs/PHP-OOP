<?php
  class Person {
    public $name;
    public $email;

    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
    }

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

    // __get MAGIC METHOD
    public function __get($property){
      if(property_exists($this, $property)){
        return $this->$property;
      }
    }

    // __set MAGIC METHOD
    public function __set($property, $value){
      if(property_exists($this, $property)){
        $this->$property = $value;
      }
      return $this;
    }
  }

  // GETTERS AND SETTERS
  $person1 = new Person('Tom Haverford', 'tom@gmail.com');
  echo 'Name: ' . $person1->getName() . ' Email: ' . $person1->getEmail();

  echo '<br>';

  // GET MAGIC METHOD
  $person2 = new Person('Ron', 'ron@gmail.com');
  echo $person2->__get('name');

  echo '<br>';
  
  // SET MAGIC METHOD
  $person2->__set('email', 'rons@gmail.com');
  echo $person2->__get('email');

  echo '<br>';

  // CHANGE USER NAME THROUGH SETNAME
  $person3 = new Person('Ann', 34);
  $person3->setName('Leslie');
  echo $person3->getName();