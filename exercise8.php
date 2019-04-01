<?php

/* el factorial de un número entero N es una operación matemática que consiste
 * en multiplicar todos los factores Nx(N-1) x (N-2) x ...x1.
 * así,el factorial de 5(escrito es 5!)es igual a: 5!=5x4x3x2x1=120
 */

$factorial = 1;
$numero = $_GET["numero"];

for ($cont = 1; $cont <= $numero; $cont++) {
	$factorial *= $cont;
}
echo "El factorial de: " . $numero . "Es:" . $factorial;
?>
