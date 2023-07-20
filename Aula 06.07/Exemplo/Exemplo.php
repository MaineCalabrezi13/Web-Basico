<?php

$nota1 = $_POST['v1'];
$nota2 = $_POST['v2'];

$media = ($nota1 + $nota2)/2;

if($media >=6){
    echo "Sua média é $media <br>Você foi APROVADO";
}
if($media <6){
    echo " Sua média é $media <br> Você foi REPROVADO";
}




?>