<?php  

function seculoAno($ano) {
	$seculo = 1;
	$anos = 0;

	for($i = 1; $i <= $ano; $i++) {
		$anos++;

		if($anos == 101) {
			$seculo++;
			$anos = 1;
		}
	}

	echo "Ano {$ano} = Século {$seculo}<br>";
}

seculoAno(1905);

seculoAno(1700);