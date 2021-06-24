<?php
  // Define a class
  class User {
    // Properties
    public $name;

    // Methods
    public function sayHello() {
      return $this->name.' Says Hello';
    }
  }

  $user1 = new User();

  $user1->name = 'Tyler';
  echo '<br>';
  echo $user1->sayHello();

  echo '<br>';

  $user2 = new User();

 $user2->name = 'Brad';
  echo '<br>';
  echo $user2->sayHello();