<?php
  class BaseClass {
    function __construct() {
        print "In BaseClass constructor<br>";
    }
 }
 
 class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor<br>";
    }
 }
 
 class OtherSubClass extends BaseClass {
     // inherits BaseClass's constructor
 }
 
 // In BaseClass constructor
 $obj = new BaseClass();
 
 // In BaseClass constructor
 // In SubClass constructor
 $obj = new SubClass();
 
 // In BaseClass constructor
 $obj = new OtherSubClass();


 class MyDestructableClass {
  function __construct() {
      print "In constructor<br>";
      $this->name = "MyDestructableClass";
  }

  function __destruct() {
      print "Destroying " . $this->name . "<br>";
  }
}

$obj = new MyDestructableClass();
?>