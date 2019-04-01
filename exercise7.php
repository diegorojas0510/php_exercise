<?php
/* cree un array llamado meses y que almecene el
 * nombre de los doce meses del año
 * recorrerlo con el FOREACH  para mostrar por pantalla los doce meses del año
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
/*con este bucle podemos recorrer el array y que cada elemento nos imprima la 
 * variable mes que este caso es el valor.
 */
foreach ($meses as $mes) {
	echo $mes . "<br/>";
}
?>


