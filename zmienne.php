<?php
$x = 10.12;
$y = 0;
$z = "Zielu śmierdzi";
$a = ['Zielu','cuchnie'];
$odpowiedz = $x>$y ;
if(!($y%2)){
    echo 'Prawda <br />';
}else{
    echo 'Zielinski <br />';
}
echo gettype($odpowiedz).'<br />';
echo gettype($x).'<br />';
echo gettype($y).'<br />';
echo gettype($a).'<br />';
echo gettype($z).'<br />';
?>