<?php

$a1=readline("1. notu giriniz :");

$a2=readline("2. notu giriniz :");

$average=($a1+$a2)/2;

 if ($average>100 || $average<0){
    echo "Geçersiz not girişi";
}

if($average>=50 && $average<=100){

echo "Not Ortalamanız :",$average,"\n";
echo "Geçtiniz !";

}
else if($average>=0 && $average<=49){
    echo "Not Ortalamanız :",$average,"\n";
    echo "Kaldınız !";
}

?>