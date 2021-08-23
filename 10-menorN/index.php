<?php
$n1=$_GET["n1"];
$n2=$_GET["n2"];

if ($n2>$n1) {
    echo $n1;
}elseif ($n2==$n1) {
    echo "numeros iguais ";
}
else{
    echo $n2;
}
?>