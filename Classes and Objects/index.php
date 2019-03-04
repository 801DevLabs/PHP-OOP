<?php
  class Customer{
    // TWO CORE COMPONENTS
    // PROPERTIES - ATTRIBUTES OF THE CLASS
    // METHODS - FUNCTIONS WIHTIN THE CLASS

    // PROPERTIES
    private $id;
    private $name;
    private $email;
    private $balance;

    // CONSTRUCTORS
    // WILL RUN EVERY TIME AN OBJECT IS INSTANTIATED
    public function __construct($id, $name, $email, $balance){
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->balance = $balance;
    }

    // METHODS
    public function getEmail(){
      return $this->email;
    }
  }

  $customer1 = new Customer('1', 'Tom Haverford', 'tom@gmail.com', 0);

  echo $customer1->getEmail();