<?php
$sexo=$_GET["sexo"];
$altura=$_GET["altura"];

if ($sexo==1) {
    echo "Você sendo Homem, Seu peso ideal é: ".((72.2*$altura)-58);
    
}else{
    echo "Você sendo Mulher, Seu peso ideal é: ".((62.1*$altura)-44.7);
}

?>