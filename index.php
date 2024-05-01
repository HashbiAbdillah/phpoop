<?php
  require_once 'animal.php'; 
  require_once 'ape.php'; 
  require_once 'frog.php'; 

  $sheep = new Animal("Shaun");
  echo "Nama domba: " . $sheep->name . "\n" . "<br>";
  echo "Legs: " . $sheep->legs . '<br>'; 
  echo "Darah dingin: " . $sheep->cold_blooded . "<br>";
  echo '<br>';

  $kodok = new Frog("Buduk");
  echo 'Nama kodok: ' . $kodok->name . "\n" . '<br>';
  echo "Jump: ";
  $kodok->jump();
  echo 'Legs: ' . $kodok->legs .'<br>' ;
  echo "Darah dingin: " . $kodok->cold_blooded . "<br>" . "<br>";


  $sungokong = new Ape("Kera Sakti");
  echo 'Nama nyet: ' . $sungokong->name . "\n" . '<br>';
  echo 'Legs: ' . $sungokong->legs .'<br>' ;
  echo "Darah dingin: " . $sungokong->cold_blooded . "<br>";
  echo "Yell: ";
  $sungokong->yell();

?> 