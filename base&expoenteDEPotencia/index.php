<?php
$base=$_GET["base"];
$expoente=$_GET["expoente"];
$potencia=pow($base,$expoente);
echo "Resultado da potencia de ".$base. " com ".$expoente." é ".$potencia;
?>