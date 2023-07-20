<?php 
$valor = $_POST['v1'];
$salar = $_POST['v2'];
$pgm = $_POST['v3'];

$mes = $pgm *12;
$parc = $valor/$mes;
$valor2 = ($salar * 30)/100;

if($parc >$valor2){
    echo "RECUSADO";
}else{}
    if ($parc<$valor2){
    echo "APROVADO";
}

?>