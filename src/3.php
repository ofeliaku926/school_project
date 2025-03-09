<?php
  $name = $_POST["name"];
  $age = $_POST["age"];

  if (isset($name) && isset($age)) {
    $message = "Hello, $name! You are $age years old.";
    echo $message;
  } else {
    $message = "Please enter your name and age to continue";
    echo $message;
  }
?>
