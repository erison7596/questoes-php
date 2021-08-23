<?php
for($i=0; $i<6;$i++){
	$n[$i]=rand(1,60);
}
print_r($n); //aqui vejo o primeiro array criado, podendo ter numeros iguais
echo "<br>"; //aqui pulo uma linha para ficar visivel abaixo os numeros corretos 

for($j=0; $j<6;$j++){
	for($k=$j; $k<6;$k++){
		
		while($k!=$j && $n[$j]==$n[$k]){ //aqui modifico qualquer gero outro numero diferente 
			$n[$k]=rand(1,60);
		}
	}
}
for($z=0; $z<6;$z++){ //aqui escrevo na tela o resultado final
	echo $n[$z]."<br>";
}

?>