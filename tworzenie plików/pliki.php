<?php
/*
  a-  tylko zapis 
  r-  tylko odczyt
  w-  tylko zapisy z nadpisywaniem pliku
  r+ - odczyt i zapis
  w+ - odczyt i nadpisywanie

*/
$file = 'plik.txt'; //Nazwa Pliku
$getFile = fopen($file,'r+'); //Otwórz plik


$read = fread($getFile,filesize($file)+1); //Odczytywanie zawartości pliku

$tresc = $read."\n Michał jebie Zielinski"; // Treść w pliku 


fwrite($getFile,$tresc); //Zapisywanie pliku


?>