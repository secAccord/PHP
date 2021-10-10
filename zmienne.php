<?php
$x = 10.12;                 //double albo float
$y = 0;                     //int
$z = "Zielu śmierdzi";      //String
$a = ['Zielu','cuchnie'];   //array
$odpowiedz = $x>$y ;        //boolean
if(!($y%2)){                //warunek 
    echo 'Prawda <br />';
}else{                      //jeśli warunek się nie spełnia
    echo 'Zielinski <br />';
}
                           
echo gettype($odpowiedz).'<br />';
echo gettype($x).'<br />';
echo gettype($y).'<br />';  //echo - wyświetla tekst (bądz zawartość zmiennej) jako element HTML
echo gettype($a).'<br />';
echo gettype($z).'<br />';
?>