<?php
/* modifica el número anterior para que muestre al lado de cada cuadrado 
 * si el número es par o impar
 ** escriba un programa que imprima por pantalla los cuadrados de de los 30
 * primeros números naturales**
 */
for ($i = 1; $i <= 30; $i++) {

	$cuadrado = $i * $i;

	echo "El cuadrado de" . $i . "Es:" . $cuadrado;

	if ($cuadrado % 2 == 0) {
		echo "El número es par";
	}else{
		echo "El número es impar";
	}
	echo "</br>";
}
?>;
