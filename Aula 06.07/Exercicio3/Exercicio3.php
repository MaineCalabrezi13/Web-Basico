<?php 
$largura = $_POST['v1'];
$comprimento = $_POST['v2'];

$metro = $largura * $comprimento;

if ($metro<100){
    echo "TERRENO POPULAR";
}else
    if ($metro>=100 && $metro<=500){
        echo "TERRENO MASTER";}
else
    if ($metro>=500){
        echo "TERRENO VIP";}




?>