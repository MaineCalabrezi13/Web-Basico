<?php  
$tipo = $_POST['tipo'];
$dia = $_POST['v2'];
$km = $_POST['v3'];


if ($tipo == "popular") {
        if($km <= 100){
            $kmpop = $km * 0.20;
        }else{
            if($km > 100){
                $kmpop = $km * 0.10;
        }
    }
    $precofinal = (90*$dia)+($kmpop + $km);
    
} 
elseif ($tipo == "luxo") {
    if($km <= 200){
        $kmlux = $km * 0.30;
    }else{ 
        if($km > 200){
            $kmlux = $km * 0.25;
    }
}
$precofinal = (150*$dia)+($kmlux + $km);
}
echo "Preço a ser pago $precofinal";


?>