<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Zadanie</title>
		<link rel="stylesheet" href="style/styl.css" />
	</head>
	<body>
		<section id="nl"><h3>Imie I nazwisko</h3></section>
		<section id="nr">LOGO</section>
		<section id="ml">
			<form action="" method="POST">
				<fieldset id="f1">
					<legend>dane</legend>
					<table>
						<tr>
							<td>Imie:</td>
							<td><input type="text" name="imie"/></td>
						</tr>
						<tr>
							<td>Nazwisko:</td>
							<td><input type="text" name="surname"/></td>
						</tr>
						<tr>
							<td>Wiek:</td>
							<td><input type="number" name="age"/></td>
						</tr>
					</table>
				</fieldset>
				<fieldset id="f2">
					<legend>adres</legend>
					<table>
						<tr>
							<td>Miasto:</td>
							<td><input type="text" name="city"/></td>
						</tr>
						<tr>
							<td>Kod. Poczt:</td>
							<td><input type="number" name="pcode" pattern="[0-9]{2}[-][0-9]{3}" /></td>
						</tr>
						<tr>
							<td>Ulica:</td>
							<td><input type="text" name="street"/></td>
						</tr>
					</table>
				</fieldset>
				<button type="submit">Wyślij</button>
			</form>
			<?php
			if(isset($_POST['imie'],$_POST['surname'],$_POST['age'],$_POST['city'],$_POST['pcode'],$_POST['street'])){
				if($_POST['imie']!="" && $_POST['surname']!=""&& $_POST['age']!=""&& $_POST['city']!=""&& $_POST['pcode']!=""&& $_POST['street']){
					$adw ='';
					$arr=[$_POST['imie'],$_POST['surname'],$_POST['age'],$_POST['city'],$_POST['pcode'],$_POST['street']];
					foreach($arr as $element){
						$adw = $adw.ucfirst(strtolower($element)).', ';
					}
					$fileNameRandomizer = rand(0000,9999)*2*rand(0000,9999);
					$plik ='zamowienia\\zamowienie'.$fileNameRandomizer.'('.date('m-d').').txt';
					$getFile = fopen($plik,'a');
					fwrite($getFile,$adw);
					fclose($getFile);
					header('fakturka.php');
				}else{
					echo "<center>Podaj Wartość</center>";
				}
			}
			?>
		</section>
		<section id="mr">
		<fieldset>
				<legend>Zawartosc Foldera zamowienia</legend>
			<?php
			$dir='zamowienia';
			if(!file_exists($dir)){
				mkdir($dir);
			}else if($dir!=""){
				$allFiles=scandir($dir,1);
				$files = array_diff($allFiles, array('.', '..'));
				foreach($files as $file){
					echo $file.'<br />';
				}
			}else{
				echo "Zatwierdz formularz";
			}
			?>
			</fieldset>
		</section>
		<section id="f">
			<?php
			echo 'Obecnie otwarty plik '.basename(__FILE__, '.php').'.php'; 
			echo '<text id="hour">'.date("d. M  Y").' Aktualny czas '.date("h : i : s").'</text>'
			?>
		</section>
	</body>
</html>
