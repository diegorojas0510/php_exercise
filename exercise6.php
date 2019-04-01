<?php

/* cree un array llamado meses y que almecene el
 * nombre de los doce meses del año
 * recorrerlo con el FOR  para mostrar por pantalla los doce meses del año
 */

$meses = array(
	"ENERO",
	"FEBRERO",
	"MARZO",
	"ABRIL",
	"MAYO",
	"JUNIO",
	"JULIO",
	"AGOSTO",
	"SEPTIEMBRE",
	"OCTUBRE",
	"NOVIEMBRE",
	"DICIEMBRE"
);
//Usamos una condicional FOR para recorrer el array y que el la variable 
//count nos ayude a imprimir la cantidad de meses exactos de los meses.
for ($i = 0; $i < count($meses); $i++){
	
	//imprimimos los meses usando la variable i
echo $meses[$i] . "<br/>";
}
?>

