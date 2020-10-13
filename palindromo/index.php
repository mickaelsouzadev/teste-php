<?php  

function palindromo($str) {
	$str_array = str_split($str);
	$str_inversa = array();
	$indice = count($str_array) - 1;

	for($i = 0; $i < count($str_array); $i++) {
		$str_inversa[$i] = $str_array[$indice];
		$indice--;
	}

	if($str_array == $str_inversa) {
		echo "String {$str}  = true<br>";

		return true;
	}

	echo "String {$str}  = false<br>";

	return false;
}

palindromo("aabaa");
palindromo("a");
palindromo("abac");