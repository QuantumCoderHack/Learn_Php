<?php

for($i=0;$i<=100;$i+=2){
    echo $i ,"\n";
}
echo "\n";

for($i=100;$i>=0;$i-=2){
    echo $i ,"\n";
}


echo "\n";

for($i=1;$i<=99;$i+=2){
    echo $i ,"\n";
}
echo "\n";
$sum=0;
for($i=99;$i>=1;$i-=2){
    $sum+=$i;
    echo $i ,"\n";
}

echo "1'den 100'e kadar olan tek sayıların toplamı :", $sum;


echo "\n";
$sum=0;
for($i=100;$i>=0;$i-=2){
    $sum+=$i;
    echo $i ,"\n";
}

echo "1'den 100'e kadar olan çift sayıların toplamı :", $sum;

echo "\n";

$sum=0;

for($sayi=2;$sayi<=100;$sayi++){

    $asal_mi=true;
    for($asal_kontrolu=2;$asal_kontrolu<$sayi;$asal_kontrolu++){
          if($sayi%$asal_kontrolu==0){
           $asal_mi=false;
         
       }
    
    }
    
    if($asal_mi){
        echo $sayi,"\n";
    
        $sum += $sayi;
    }
  
    
}
echo "1'den 100'e kadar olan asal sayıların toplamı :", $sum;

?>