<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];

if ($num2%2==0) {
    echo ($num1+$num2);
}else{
    echo ($num1*$num2);
}

?>