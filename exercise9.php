<?php

/* se llama fizzbuzz.  
 * Un programa que muestre los números del 1 al 100, pero si el número 
 * es múltiplo de 3 muestre Fizz, si es múltiplo de 5 muestre Buzz,
 *  y si es múltiplo de 3 y 5 muestre FizzBuzz
 */

$numero=$_GET["numero"];

for ($i = 0; $i <= $numero; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz" . "<br/>";
	} else if ($i % 5 == 0) {
		echo "Buzz" . "<br/>";
	} else if
	($i % 3 == 0) {
		echo "Fizz<br/>";
	}else{
		echo $i. "<br/>";
	}
}
?>
