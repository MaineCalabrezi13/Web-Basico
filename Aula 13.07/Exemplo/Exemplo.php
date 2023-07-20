<?php
echo "Desenvolva um algoritmo que mostre todos os números no intervalo entre n e m. ";
$valorI = $_POST['v1'];
$valorF = $_POST['v2'];

for ($i = $valorI; $i<=$valorF; $i++){
    echo $i . " " ;
}
?>