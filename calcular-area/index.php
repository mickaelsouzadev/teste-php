<?php  

function calculaArea($num) {
	$num_quadrados = pow($num, 2) + pow($num - 1, 2);

	echo "N{$num} = {$num_quadrados}<br>";
}

calculaArea(1);
calculaArea(2);
calculaArea(3);
calculaArea(4);