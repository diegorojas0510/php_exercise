<?php

/*escriba un programa que multiplique los primeros 20 primeros números naturales
 * utilice el bucle while
 */
$numero=1;
$contador=2;
while ($contador <= 20){
	$numero*=$contador;
	echo $numero."</br>";
	$contador++;
}
echo "El resultado de los números es: ".$numero;

?>
