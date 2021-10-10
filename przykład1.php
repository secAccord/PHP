<?php 
    $con = mysqli_connect('localhost','root','','test');
    
    $sql = "SELECT * FROM `kobiety`"; //Pytanie w języku SQL

    $query = mysqli_query($con,$sql); //Zapytanie do bazy

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Znaleziono '.mysqli_num_rows($query)." kobiet" ?></title>
</head>
<body>
<?php
    while($row = mysqli_fetch_row($query)){ //Wyciąganie wierszy do zmiennej do póki wierszę się nie kończą
        echo<<<END
            $row[0] - $row[1] $row[2] <br />
        END;
    }
?>
</body>
</html>