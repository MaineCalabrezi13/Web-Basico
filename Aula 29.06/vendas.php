<?php
$nome = "Maine";
$salario = "1200";
$vendas = "200.00";

$comissao = ($vendas*15)/100;
$salarfinal = ($salario + $comissao);
echo ("FUNCIONÁRIO: $nome <br>");
echo ("SALÁRIO FIXO: $salario <br>");
echo ("SALÁRIO NO FINAL DO MÊS: $salarfinal <br>");

?>