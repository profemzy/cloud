<?php
class Person {
  public $name;
  public $age;
  public $city;
}

$myObj = new Person();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$person2 = new Person();
$person2->name = "Femi";
$person2->age = 32;
$person2->city = "Lagos";

$person3 = new Person();
$person3->name = "Rupesh";
$person3->age = 29;
$person3->city = "Mumbai";

$persons_array = array();
array_push($persons_array, $myObj, $person2,  $person3);

$myJSON = json_encode($persons_array);

echo $myJSON;
?>
