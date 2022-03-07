<?php require_once dirname(__FILE__) .'/../../../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator_rozszerzony</title>
</head>
<body>
<form action="<?php print(_APP_URL);?>/Choose/Calc_cred/App/cred.php" method="post">

	Kwota:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
	Ilość Lat:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
	Procent:<br>


	<input id="id_x" type="text" name="Kwota" value="<?php if(isset($Kwota)) print($Kwota); ?>" >

    
	<input id="id_x" type="text" name="Lata" value="<?php if(isset($Lata)) print($Lata); ?>" >

    
	<input id="id_y" type="text" name="Procent" value="<?php if(isset($Procent)) print($Procent); ?>">

	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-image: linear-gradient(to right, rgba(255,0,0,1), rgba(255,0,0,0)); width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-image: linear-gradient(to right, rgba(124,252,0), rgba(255,0,0,0)); width:300px;">
<?php echo 'Rata na jeden miesiąc: '.$result; ?>
</div>
<?php } ?>
<br>

<button><a href="<?php print(_APP_URL);?>/Choose/view.php">Powrót</a></button>

</body>
</html>