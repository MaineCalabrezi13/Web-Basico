<?php

$num1 = $_POST['v1'];
$num2 = $_POST['v2'];

if($num1 > $num2){
    echo "O primeiro valor é o maior";
}
if($num2 > $num1){
    echo "O segundo valor é o maior";
}
if($num1 == $num2){
    echo "Não existe valor maior, os dois são iguais.";
}

?>