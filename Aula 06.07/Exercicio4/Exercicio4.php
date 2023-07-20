<?php 
$nome = $_POST['v1'];
$salar = $_POST['v2'];
$tempo =  $_POST['v3']; 

if($tempo < 3){
    $desc = ($salar * 3 )/100;
    $soma = $salar+$desc;
}
if($tempo >= 3 && $tempo <10){
    $desc = ($salar * 12.5 )/100;
    $soma = $salar+$desc;
}
if($tempo >=10){
    $desc = ($salar * 20 )/100;
    $soma = $salar+$desc;
}
echo "O NOVO SALÁRIO É: $soma";
?>