<center aling>
<?php

/* iprimir la tabla de multiplicar del número pasadoen un parametro get
 * por la url 
 */

/* se genera la condición para validar si existe un número
 * y si se cumple lo primero y que exsite el integer o numeric
 * sera igual a lo que se pase por la url si no, se imprime el número por defecto
 */
if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
	//se llama la variable Get para enviar una variable url
	$numero = $_GET["numero"];
} else {
	$numero = 5; /* Si el valor es nulo o contrario de numerico se 
	 * imprime la tabla del 5 por defecto
	 */
	echo "<p>Número por defecto</p>";
}


//se imprime por pantalla la tabla de multiplicar de la variable .$numero
echo "<h2> Tabla de Multiplicar de " . $numero . "</h2>";

//el for inicia en 1
for ($i = 1; $i <= 10; $i++) {
	/* se imprime el numero que esta en i seguido del nnúmero que hay en la 
	 * variable numero y despues el resultado de i*número.
	 */
	echo $i . " x " . $numero . " = " . ($i * $numero) . "</br>";
}
?>
</aling>