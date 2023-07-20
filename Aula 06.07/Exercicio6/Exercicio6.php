<?php 
$altura = $_POST['v1'];
$peso = $_POST['v2'];

$imc = $peso/($altura *$altura);

if($imc < 18.5){
    echo "IMC: $imc <br>ABAIXO DO PESO";
}
    if($imc >= 18.5 && $imc < 25){
        echo "IMC: $imc <br>PESO IDEAL";
    }
if($imc >= 25 && $imc < 30){
        echo "IMC: $imc <br>SOBREPESO";
    }
if($imc > 40){
        echo "IMC: $imc <br>OBESIDADE MÓRBIDA";
    }


?>