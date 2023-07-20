<?php 
$hora = $_POST['v1'];

if($hora <10){
    $ponto = $hora *2;
}
    if($hora >=10 && $hora<=20){
        $ponto = $hora *5;
    }
    if($hora >20){
        $ponto = $hora *10;
}
$dinheiro = $ponto * 0.05;
echo "QUANTIDADE DE HORAS FEITA: $hora <br>QUANTIDADE DE PONTO: $ponto <br>VALOR FATURADO: $dinheiro";

?>