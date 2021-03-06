<?php
  class Customer{
    // TWO CORE COMPONENTS
    // PROPERTIES - ATTRIBUTES OF THE CLASS
    // METHODS - FUNCTIONS WIHTIN THE CLASS

    // PROPERTIES
    protected $id;
    protected $name;
    protected $email;
    protected $balance;

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

  // $customer1 = new Customer('1', 'Tom Haverford', 'tom@gmail.com', 0);

  class Subscriber extends Customer {
    public $plan;

    // CONSTRUCTOR WITH PARENT DATA
    public function __construct($id, $name, $email, $balance, $plan){
      parent::__construct($id, $name, $email, $balance);
      $this->plan = $plan;
    }
  }

  $subscriber = new Subscriber('1', 'Tom Haverford', 'tom@gmail.com', 0, 'Pro');

  echo $subscriber->getEmail();