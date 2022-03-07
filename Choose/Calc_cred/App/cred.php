<?php

require_once dirname(__FILE__).'/../../../config.php';



//pobranie parametrów

$Kwota = $_REQUEST ['Kwota'];
$Lata = $_REQUEST ['Lata'];
$Procent = $_REQUEST ['Procent'];

// walidacja parametrów 


if ( ! (isset($Kwota) && isset($Lata) && isset($Procent))) {
	
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}


if ( $Kwota == "") {
	$messages [] = 'Nie podano Kwoty';
}
if ( $Lata == "") {
	$messages [] = 'Nie podano ilości lat';
}
if ( $Procent == "") {
	$messages [] = 'Nie podano procentu';
}


if (empty( $messages )) {
	
	
	if (! is_numeric( $Kwota )) {
		$messages [] = 'Kwota nie została podana jako liczba całkowita';
	}
	
	if (! is_numeric( $Lata )) {
		$messages [] = 'Podana ilośc lat nie nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $Procent )) {
		$messages [] = 'Podany procent nie jest liczbą całkowitą';
	}	
}

// Obliczenia

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja int
	$Kwota = intval($Kwota);
	$Lata= intval($Lata);
	$Procent= intval($Procent);

	//wykonanie operacji
	$Miesiące = $Lata*12;
	$result=$Kwota + ($Kwota*($Procent/100));
	$result = $result/$Miesiące;
	
}


include 'view_cred.php';