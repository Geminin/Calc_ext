<?php require_once dirname(__FILE__) .'/../../../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator_rozszerzony</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/Choose/Calc_norm/App/calc.php" method="post">

<!--  L1 -->
Liczba 1:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Operacja:  &nbsp;&nbsp;&nbsp;Liczba 2: <br>
<input id="id_x" type="text" name="x" value="<?php if(isset($Kwota)) print($Kwota); ?>" />&nbsp;&nbsp;

<!--  Operacja -->

	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
        <option value="pow">Potęga</option>
	</select>&nbsp;&nbsp;

<!--  L2 -->

<input id="id_x" type="text" name="y" value="<?php if(isset($Kwota)) print($Kwota); ?>" /><br />

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
<?php echo 'Wynik '.$result; ?>
</div>
<?php } ?>
	

<button><a href="<?php print(_APP_URL);?>/Choose/view.php">Powrót</a></button>



</body>
</html>