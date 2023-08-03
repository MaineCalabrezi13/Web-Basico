<html>
<table border="1">
<?php
$num = 1;


for($i = 1; $i <=8; $i++){
echo "<tr>";
for($j = 1; $j <=8; $j++){
 echo "<td> $num </td>";  

$num = $num *2;

}

}
?>