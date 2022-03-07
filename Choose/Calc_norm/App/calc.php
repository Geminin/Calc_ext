<?php

require_once dirname(__FILE__).'/../../../config.php';



// pobranie parametrów

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$op = $_REQUEST ['op'];

// 2. walidacja parametrów 


if ( ! (isset($x) && isset($y) && isset($op))) {
	
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby 2';
}


if (empty( $messages )) {
	
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}

// Wykonanie obliczeń

if (empty ( $messages )) { 
	
	//konwersja na int

	$x = intval($x);
	$y = intval($y);
	
	//wykonanie operacji
	switch ($op) {
		case 'minus' :
			$result = $x - $y;
			break;
		case 'times' :
			$result = $x * $y;
			break;
		case 'div' :
			$result = $x / $y;
			break;
        case 'pow';
            $result = pow($x,$y);
            break;    
		case 'plus' :
			$result = $x + $y;
			break;
	}
}


include 'view_calc.php';