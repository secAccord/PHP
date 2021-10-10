<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    
    if(isset($_POST['name']) && $_POST['name']){
        echo 'Przywitajmy '.$_POST['name'];
    }else{

        echo 'Formularz';

    }
    
    
    
    
    ?></title>
</head>
<body>
    <form action="" method="post">
        Imię<input type="text" name="name"><br />
        Nazwisko<input type="text" name="surname"><br />
        <input type='submit'>
    </form>
    <?php
        $con = mysqli_connect('localhost','root','','test'); //Połączenie z bazą danych
        if(isset($_POST['name']) && isset($_POST['surname'])){ //czy zmienna została zdefiniowana
            if($_POST['name'] != '' && $_POST['surname'] != ''){ //czy zmienna nie jest pusta
                $sql = 'INSERT INTO `kobiety` (`name`, `surname`) VALUES ("'.$_POST['name'] .'","'.$_POST['surname'].'")'; //zapytanie w języku SQL
                if(mysqli_query($con,$sql)){ //Wysyłanie do bazy i sprawdzenie czy nie było żadnego błędu

                    echo "Dodano ".$_POST['name']." do bazy";

                }else{  //Error przy błędzie
                    echo 'Błąd dodawnia do bazy';
                }


            }else{
                echo "Uzupełnij dane";
            }
        }else{
            echo "Witaj pierwszy raz na stronie <3";
        }
    ?>
</body>
</html>