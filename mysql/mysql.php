<?php
    //                     (adres,użytkownik,hasło,baza)
    $con = mysqli_connect('localhost','root','','test');
    
    $sql = "SELECT * FROM `kobiety`"; //Pytanie w języku SQL

    $query = mysqli_query($con,$sql); //Zapytanie do bazy


    while($row = mysqli_fetch_row($query)){ //Wyciąganie wierszy do zmiennej do póki wierszę się nie kończą
        echo<<<END
            $row[0] - $row[1] $row[2] <br />
        END;
    }
?>
