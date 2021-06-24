<?php
  // Define a class
  class User {
    // Properties
    private $name;
    private $age;

    // Contstructor
    public function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age;
    }

    // Methods
    public function sayHello() {
      return $this->name.' Says Hello';
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    // __get MAGIC METHOD
    public function __get($property) {
      if(property_exists($this, $property)) {
        return $this->$property;
      }
    }

    // __set MAGIC METHOD
    public function __set($property, $value) {
      if(property_exists($this, $property)) {
        $this->$property = $value;
      }
      return $this;
    }


  }

  $user1 = new User('Tyler', 35);
  $user1->__set('age', 41);
  echo $user1->__get('age');
