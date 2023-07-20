<?php
$Nome = $_POST['nome'];
$Sexo = $_POST['sexo'];
$Compra = $_POST['valor'];
$sexo = $_POST["sexo"];
    if ($sexo == "masculino") {
        $desc = ($Compra *5)/100;
        $resul = $Compra - $desc;
    } elseif ($sexo == "feminino") {
        $desc = ($Compra *13)/100;
        $resul = $Compra - $desc;
    }

echo "O valor com desconto ficou de $resul reais";
?>