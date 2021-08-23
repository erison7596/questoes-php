<?php
//a sequencia é 1/2 + 2/4 + 3/6 +4/8 ... ele só pede que exiba a sequencia

$digito=1;

for($i=0; $i<30; $i++){
    echo $digito."/".($digito*2)."<br>";
    $digito++;
}

?>