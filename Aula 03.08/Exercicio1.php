<?php
$soma = 0;
for($i = 1; $i <=20; $i++){
   if(($i%2==1)&&($i%3==0)){
    $soma += $i ;
   }
}
echo $soma;
?>