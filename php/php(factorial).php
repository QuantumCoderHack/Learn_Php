<?php

$sum=0;
for($i=2;$i<=100;$i++){
 $asal=true;
 
 for($j=2;$j<$i;$j++){

    if($i%$j==0){
        $asal=false;
        break;
    }
 }
if($asal){
    echo $i ,"\n";
    $sum+=$i;
}

    
}
echo "asal sayıların toplamı :" ,$sum; 

echo "\n";

$a=readline("bir sayı girin :");

$fac=1;
for($i=1; $i<=$a;$i++){
    $fac*=$i;
    echo $i ,"\n";
}
echo "Faktöryeli :",$fac;
?>
